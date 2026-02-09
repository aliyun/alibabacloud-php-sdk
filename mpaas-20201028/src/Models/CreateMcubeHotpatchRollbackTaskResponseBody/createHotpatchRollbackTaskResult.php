<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeHotpatchRollbackTaskResponseBody;

use AlibabaCloud\Dara\Model;

class createHotpatchRollbackTaskResult extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var string
     */
    public $rollbackTaskId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'resultMsg' => 'ResultMsg',
        'rollbackTaskId' => 'RollbackTaskId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        if (null !== $this->rollbackTaskId) {
            $res['RollbackTaskId'] = $this->rollbackTaskId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }

        if (isset($map['RollbackTaskId'])) {
            $model->rollbackTaskId = $map['RollbackTaskId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
