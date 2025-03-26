<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody\invocations\invokeDesktops;

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
     * @var int
     */
    public $invokeDesktopCount;

    /**
     * @var int
     */
    public $invokeDesktopSucceedCount;

    /**
     * @var invokeDesktops[]
     */
    public $invokeDesktops;

    /**
     * @var string
     */
    public $invokeId;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'commandType' => 'CommandType',
        'creationTime' => 'CreationTime',
        'endUserId' => 'EndUserId',
        'invocationStatus' => 'InvocationStatus',
        'invokeDesktopCount' => 'InvokeDesktopCount',
        'invokeDesktopSucceedCount' => 'InvokeDesktopSucceedCount',
        'invokeDesktops' => 'InvokeDesktops',
        'invokeId' => 'InvokeId',
    ];

    public function validate()
    {
        if (\is_array($this->invokeDesktops)) {
            Model::validateArray($this->invokeDesktops);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->invokeDesktopCount) {
            $res['InvokeDesktopCount'] = $this->invokeDesktopCount;
        }

        if (null !== $this->invokeDesktopSucceedCount) {
            $res['InvokeDesktopSucceedCount'] = $this->invokeDesktopSucceedCount;
        }

        if (null !== $this->invokeDesktops) {
            if (\is_array($this->invokeDesktops)) {
                $res['InvokeDesktops'] = [];
                $n1 = 0;
                foreach ($this->invokeDesktops as $item1) {
                    $res['InvokeDesktops'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
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

        if (isset($map['InvokeDesktopCount'])) {
            $model->invokeDesktopCount = $map['InvokeDesktopCount'];
        }

        if (isset($map['InvokeDesktopSucceedCount'])) {
            $model->invokeDesktopSucceedCount = $map['InvokeDesktopSucceedCount'];
        }

        if (isset($map['InvokeDesktops'])) {
            if (!empty($map['InvokeDesktops'])) {
                $model->invokeDesktops = [];
                $n1 = 0;
                foreach ($map['InvokeDesktops'] as $item1) {
                    $model->invokeDesktops[$n1++] = invokeDesktops::fromMap($item1);
                }
            }
        }

        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }

        return $model;
    }
}
