<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeUpgradeTaskResponseBody;

use AlibabaCloud\Tea\Model;

class createTaskResult extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $upgradeTaskId;
    protected $_name = [
        'errorCode'     => 'ErrorCode',
        'requestId'     => 'RequestId',
        'resultMsg'     => 'ResultMsg',
        'success'       => 'Success',
        'upgradeTaskId' => 'upgradeTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->upgradeTaskId) {
            $res['upgradeTaskId'] = $this->upgradeTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createTaskResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['upgradeTaskId'])) {
            $model->upgradeTaskId = $map['upgradeTaskId'];
        }

        return $model;
    }
}
