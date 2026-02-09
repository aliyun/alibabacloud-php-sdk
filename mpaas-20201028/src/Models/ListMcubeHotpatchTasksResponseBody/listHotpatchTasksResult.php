<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeHotpatchTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeHotpatchTasksResponseBody\listHotpatchTasksResult\hotpatchTaskInfo;

class listHotpatchTasksResult extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var hotpatchTaskInfo[]
     */
    public $hotpatchTaskInfo;

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
        'hotpatchTaskInfo' => 'HotpatchTaskInfo',
        'requestId' => 'RequestId',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->hotpatchTaskInfo)) {
            Model::validateArray($this->hotpatchTaskInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->hotpatchTaskInfo) {
            if (\is_array($this->hotpatchTaskInfo)) {
                $res['HotpatchTaskInfo'] = [];
                $n1 = 0;
                foreach ($this->hotpatchTaskInfo as $item1) {
                    $res['HotpatchTaskInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['HotpatchTaskInfo'])) {
            if (!empty($map['HotpatchTaskInfo'])) {
                $model->hotpatchTaskInfo = [];
                $n1 = 0;
                foreach ($map['HotpatchTaskInfo'] as $item1) {
                    $model->hotpatchTaskInfo[$n1] = hotpatchTaskInfo::fromMap($item1);
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
