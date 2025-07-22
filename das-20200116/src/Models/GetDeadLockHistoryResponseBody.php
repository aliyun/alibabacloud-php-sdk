<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetDeadLockHistoryResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example {
     * "total": 2,
     * "list": [
     * {
     * "accountId": "108************",
     * "textId": "35303d12d52d29ba73bb85fa2d5b****",
     * "gmtModified": 1732712680000,
     * "lockTime": 1732687047000,
     * "gmtCreate": 1732712680000,
     * "nodeId": "pi-8****************",
     * "uuid": "pc-8v**************"
     * },
     * {
     * "accountId": "108************",
     * "textId": "50a24bdcc5fe7e03f92a55ae7574****",
     * "gmtModified": 1732626448000,
     * "lockTime": 1722500305000,
     * "gmtCreate": 1732626448000,
     * "nodeId": "pi-8****************",
     * "uuid": "pc-8v**************"
     * }
     * ]
     * }
     *
     * @var string
     */
    public $data;

    /**
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @example B6D17591-B48B-4D31-9CD6-9B9796B2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @example None
     *
     * @var string
     */
    public $synchro;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'synchro' => 'Synchro',
    ];

    public function validate() {}

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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->synchro) {
            $res['Synchro'] = $this->synchro;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeadLockHistoryResponseBody
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Synchro'])) {
            $model->synchro = $map['Synchro'];
        }

        return $model;
    }
}
