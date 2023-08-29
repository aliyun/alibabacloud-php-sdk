<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaTasksResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaTasksResponseBody\listMcubeNebulaTaskResult\nebulaTaskInfo;
use AlibabaCloud\Tea\Model;

class listMcubeNebulaTaskResult extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var nebulaTaskInfo[]
     */
    public $nebulaTaskInfo;

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
    protected $_name = [
        'errorCode'      => 'ErrorCode',
        'nebulaTaskInfo' => 'NebulaTaskInfo',
        'requestId'      => 'RequestId',
        'resultMsg'      => 'ResultMsg',
        'success'        => 'Success',
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
        if (null !== $this->nebulaTaskInfo) {
            $res['NebulaTaskInfo'] = [];
            if (null !== $this->nebulaTaskInfo && \is_array($this->nebulaTaskInfo)) {
                $n = 0;
                foreach ($this->nebulaTaskInfo as $item) {
                    $res['NebulaTaskInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listMcubeNebulaTaskResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['NebulaTaskInfo'])) {
            if (!empty($map['NebulaTaskInfo'])) {
                $model->nebulaTaskInfo = [];
                $n                     = 0;
                foreach ($map['NebulaTaskInfo'] as $item) {
                    $model->nebulaTaskInfo[$n++] = null !== $item ? nebulaTaskInfo::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
