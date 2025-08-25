<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeNebulaTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeNebulaTasksResponseBody\listMcubeNebulaTaskResult\nebulaTaskInfo;

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
        'errorCode' => 'ErrorCode',
        'nebulaTaskInfo' => 'NebulaTaskInfo',
        'requestId' => 'RequestId',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->nebulaTaskInfo)) {
            Model::validateArray($this->nebulaTaskInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->nebulaTaskInfo) {
            if (\is_array($this->nebulaTaskInfo)) {
                $res['NebulaTaskInfo'] = [];
                $n1 = 0;
                foreach ($this->nebulaTaskInfo as $item1) {
                    $res['NebulaTaskInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['NebulaTaskInfo'])) {
            if (!empty($map['NebulaTaskInfo'])) {
                $model->nebulaTaskInfo = [];
                $n1 = 0;
                foreach ($map['NebulaTaskInfo'] as $item1) {
                    $model->nebulaTaskInfo[$n1] = nebulaTaskInfo::fromMap($item1);
                    ++$n1;
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
