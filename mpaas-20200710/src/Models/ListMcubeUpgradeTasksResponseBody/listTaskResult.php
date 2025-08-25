<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeUpgradeTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeUpgradeTasksResponseBody\listTaskResult\taskInfo;

class listTaskResult extends Model
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
     * @var taskInfo[]
     */
    public $taskInfo;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'requestId' => 'RequestId',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
        'taskInfo' => 'TaskInfo',
    ];

    public function validate()
    {
        if (\is_array($this->taskInfo)) {
            Model::validateArray($this->taskInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->taskInfo) {
            if (\is_array($this->taskInfo)) {
                $res['TaskInfo'] = [];
                $n1 = 0;
                foreach ($this->taskInfo as $item1) {
                    $res['TaskInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['TaskInfo'])) {
            if (!empty($map['TaskInfo'])) {
                $model->taskInfo = [];
                $n1 = 0;
                foreach ($map['TaskInfo'] as $item1) {
                    $model->taskInfo[$n1] = taskInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
