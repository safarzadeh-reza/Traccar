from ippanel import Client, Error, HTTPError, ResponseCode

def processParagraph():

    client = Client("mSlhtsSZUVW0KdquNmHHewZLEpu33K0ZQ_DFx2R3acI=")

    try:
        bulk_id = client.send("+983000505", ["+989124499659"], "Hello from python client!")
        print(bulk_id)
    except Error as e:
        print("Error handled => code: %s, message: %s" % (e.code, e.message))
        if e.code == ResponseCode.ErrUnprocessableEntity.value:
            for field in e.message:
                print("Field: %s , Errors: %s" % (field, e.message[field]))
    except HTTPError as e:
        print("Error handled => code: %s" % (e))

    return client


