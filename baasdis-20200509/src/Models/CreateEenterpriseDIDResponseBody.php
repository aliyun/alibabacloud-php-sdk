<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509\Models;

use AlibabaCloud\Tea\Model;

class CreateEenterpriseDIDResponseBody extends Model
{
    /**
     * @example "did:mychain:xxx"
     *
     * @var string
     */
    public $DID;

    /**
     * @example "7CEDB9B0-E68A-4E67-A258-EEE342695921"
     *
     * @var string
     */
    public $requestId;

    /**
     * @example "OK"
     *
     * @var string
     */
    public $resultCode;

    /**
     * @example ""
     *
     * @var string
     */
    public $resultMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'DID'           => 'DID',
        'requestId'     => 'RequestId',
        'resultCode'    => 'ResultCode',
        'resultMessage' => 'ResultMessage',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DID) {
            $res['DID'] = $this->DID;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEenterpriseDIDResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DID'])) {
            $model->DID = $map['DID'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
