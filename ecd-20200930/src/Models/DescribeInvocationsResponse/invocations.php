<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponse;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponse\invocations\invokeDesktops;
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
    public $invocationStatus;

    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var invokeDesktops[]
     */
    public $invokeDesktops;
    protected $_name = [
        'commandContent'   => 'CommandContent',
        'commandType'      => 'CommandType',
        'creationTime'     => 'CreationTime',
        'invocationStatus' => 'InvocationStatus',
        'invokeId'         => 'InvokeId',
        'invokeDesktops'   => 'InvokeDesktops',
    ];

    public function validate()
    {
        Model::validateRequired('commandContent', $this->commandContent, true);
        Model::validateRequired('commandType', $this->commandType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('invocationStatus', $this->invocationStatus, true);
        Model::validateRequired('invokeId', $this->invokeId, true);
        Model::validateRequired('invokeDesktops', $this->invokeDesktops, true);
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
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
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
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
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

        return $model;
    }
}
