<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ServiceInvokeResponseBody extends Model
{
    /**
     * @example Operation.Success
     *
     * @var string
     */
    public $code;

    /**
     * @example "{\\"ifaa\\"{\\"code\\":0,\\"message\\":\\"eyJo....BWUFBQUFBIn19\\"},\\"version\\":\\"1.0.0\\",\\"transaction\\":{\\"id\\":\\"sIFAA-ios\\",\\"type\\":\\"sIFAA-ios\\",\\"payload\\":\\"\\"},\\"action\\":\\"request/auth\\"}" }
     *
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @example qacdfhigvbcvb
     *
     * @var string
     */
    public $idToken;

    /**
     * @example Operation.Failure.ApiInvoke.ServiceInArrears
     *
     * @var string
     */
    public $message;

    /**
     * @example F8F63CAB-A96C-5017-AFB0-324593223817
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'eventId'   => 'EventId',
        'idToken'   => 'IdToken',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->idToken) {
            $res['IdToken'] = $this->idToken;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ServiceInvokeResponseBody
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
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['IdToken'])) {
            $model->idToken = $map['IdToken'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
