<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryCallDetailByCallIdResponseBody extends Model
{
    /**
     * @description The response code.
     *
     *   The value OK indicates that the request was successful.
     *   For more information about other response codes, see [API error codes](~~112502~~).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The details of the call, in the JSON format.
     *
     *   **caller**: the calling number.
     *   **startDate**: the time when the call was started.
     *   **stateDesc**: the description of the call state.
     *   **duration**: the call duration. Unit: seconds. The value **0** indicates that the user was not connected.
     *   **callerShowNumber**: the calling number displayed to the called party.
     *   **gmtCreate**: the time when the call request was received.
     *   **state**: the call state. The call state is returned by the Internet service provider (ISP) in real time. For more information about call states, see [ISP-returned error codes](~~55085~~).
     *   **endDate**: the time when the call was ended.
     *   **calleeShowNumber**: the number displayed to the called party.
     *   **callee**: the called number.
     *   **aRingTime**: the time when Line A started to ring, in the yyyy-MM-dd HH:mm:ss format.
     *   **aEndTime**: the time when ringing on Line A ended, in the yyyy-MM-dd HH:mm:ss format.
     *   **bRingTime**: the time when Line B started to ring, in the yyyy-MM-dd HH:mm:ss format.
     *   **bEndTime**: the time when ringing on Line B ended, in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example {"caller":"18767****","startDate":"","stateDesc":"502","duration":0,"callerShowNumber":"05344****","gmtCreate":"2017-11-27 20:09:06","state":"502","endDate":"","calleeShowNumber":"053447****","bRingTime":"2022-01-01 12:02:00"，"bEndTime":"2022-01-01 12:02:28"，"callee":"1373546****"}
     *
     * @var string
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example A90E4451-FED7-49D2-87C8-00700A8C4D0D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCallDetailByCallIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
