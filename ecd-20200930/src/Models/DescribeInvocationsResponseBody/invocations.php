<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody\invocations\invokeDesktops;
use AlibabaCloud\Tea\Model;

class invocations extends Model
{
    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $commandType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $invocationStatus;

    /**
     * @var invokeDesktops[]
     */
    public $invokeDesktops;

    /**
     * @var string
     */
    public $invokeId;
    protected $_name = [
        'commandContent'   => 'CommandContent',
        'commandType'      => 'CommandType',
        'creationTime'     => 'CreationTime',
        'endUserId'        => 'EndUserId',
        'invocationStatus' => 'InvocationStatus',
        'invokeDesktops'   => 'InvokeDesktops',
        'invokeId'         => 'InvokeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeDesktops) {
            $res['InvokeDesktops'] = [];
            if (null !== $this->invokeDesktops && \is_array($this->invokeDesktops)) {
                $n = 0;
                foreach ($this->invokeDesktops as $item) {
                    $res['InvokeDesktops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeDesktops'])) {
            if (!empty($map['InvokeDesktops'])) {
                $model->invokeDesktops = [];
                $n                     = 0;
                foreach ($map['InvokeDesktops'] as $item) {
                    $model->invokeDesktops[$n++] = null !== $item ? invokeDesktops::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }

        return $model;
    }
}
