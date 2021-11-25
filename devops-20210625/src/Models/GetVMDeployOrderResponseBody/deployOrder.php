<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\actions;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\deployMachineInfo;
use AlibabaCloud\Tea\Model;

class deployOrder extends Model
{
    /**
     * @description 后续action
     *
     * @var actions[]
     */
    public $actions;

    /**
     * @description 创建时时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 创建人
     *
     * @var string
     */
    public $creator;

    /**
     * @description 当前发布批次
     *
     * @var int
     */
    public $currentBatch;

    /**
     * @description 部署机器信息
     *
     * @var deployMachineInfo
     */
    public $deployMachineInfo;

    /**
     * @description 部署单ID
     *
     * @var string
     */
    public $deployOrderId;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $exceptionCode;

    /**
     * @description 发布状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 总发布批次
     *
     * @var int
     */
    public $totalBatch;

    /**
     * @description 修改时间
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
