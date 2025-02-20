<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\actions;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\deployMachineInfo;

class deployOrder extends Model
{
    /**
     * @var actions[]
     */
    public $actions;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $creator;
    /**
     * @var int
     */
    public $currentBatch;
    /**
     * @var deployMachineInfo
     */
    public $deployMachineInfo;
    /**
     * @var string
     */
    public $deployOrderId;
    /**
     * @var string
     */
    public $exceptionCode;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $totalBatch;
    /**
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
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        if (null !== $this->deployMachineInfo) {
            $this->deployMachineInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['actions'] = [];
                $n1             = 0;
                foreach ($this->actions as $item1) {
                    $res['actions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['deployMachineInfo'] = null !== $this->deployMachineInfo ? $this->deployMachineInfo->toArray($noStream) : $this->deployMachineInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n1             = 0;
                foreach ($map['actions'] as $item1) {
                    $model->actions[$n1++] = actions::fromMap($item1);
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
