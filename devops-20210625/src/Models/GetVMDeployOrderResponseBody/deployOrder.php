<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\actions;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\deployMachineInfo;
use AlibabaCloud\Tea\Model;

class deployOrder extends Model
{
    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @example 111111111111
     *
     * @var int
     */
    public $createTime;

    /**
     * @example ssaassa
     *
     * @var string
     */
    public $creator;

    /**
     * @example 2
     *
     * @var int
     */
    public $currentBatch;

    /**
     * @var deployMachineInfo
     */
    public $deployMachineInfo;

    /**
     * @example 11111
     *
     * @var string
     */
    public $deployOrderId;

    /**
     * @var string
     */
    public $exceptionCode;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalBatch;

    /**
     * @example 11111111111
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'actions'           => 'actions',
        'createTime'        => 'createTime',
        'creator'           => 'creator',
        'currentBatch'      => 'currentBatch',
        'deployMachineInfo' => 'deployMachineInfo',
        'deployOrderId'     => 'deployOrderId',
        'exceptionCode'     => 'exceptionCode',
        'status'            => 'status',
        'totalBatch'        => 'totalBatch',
        'updateTime'        => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->currentBatch) {
            $res['currentBatch'] = $this->currentBatch;
        }
        if (null !== $this->deployMachineInfo) {
            $res['deployMachineInfo'] = null !== $this->deployMachineInfo ? $this->deployMachineInfo->toMap() : null;
        }
        if (null !== $this->deployOrderId) {
            $res['deployOrderId'] = $this->deployOrderId;
        }
        if (null !== $this->exceptionCode) {
            $res['exceptionCode'] = $this->exceptionCode;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->totalBatch) {
            $res['totalBatch'] = $this->totalBatch;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n              = 0;
                foreach ($map['actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? actions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['currentBatch'])) {
            $model->currentBatch = $map['currentBatch'];
        }
        if (isset($map['deployMachineInfo'])) {
            $model->deployMachineInfo = deployMachineInfo::fromMap($map['deployMachineInfo']);
        }
        if (isset($map['deployOrderId'])) {
            $model->deployOrderId = $map['deployOrderId'];
        }
        if (isset($map['exceptionCode'])) {
            $model->exceptionCode = $map['exceptionCode'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['totalBatch'])) {
            $model->totalBatch = $map['totalBatch'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
