<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeUpgradeTasksResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeUpgradeTasksResponseBody\listTaskResult\taskInfo;
use AlibabaCloud\Tea\Model;

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
        'success'   => 'Success',
        'taskInfo'  => 'TaskInfo',
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
        if (null !== $this->taskInfo) {
            $res['TaskInfo'] = [];
            if (null !== $this->taskInfo && \is_array($this->taskInfo)) {
                $n = 0;
                foreach ($this->taskInfo as $item) {
                    $res['TaskInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listTaskResult
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
        if (isset($map['TaskInfo'])) {
            if (!empty($map['TaskInfo'])) {
                $model->taskInfo = [];
                $n               = 0;
                foreach ($map['TaskInfo'] as $item) {
                    $model->taskInfo[$n++] = null !== $item ? taskInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
