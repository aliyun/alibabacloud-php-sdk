<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\deployMachineInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\deployMachineInfo\deployMachines\actions;

class deployMachines extends Model
{
    /**
     * @var actions[]
     */
    public $actions;
    /**
     * @var int
     */
    public $batchNum;
    /**
     * @var string
     */
    public $clientStatus;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string
     */
    public $machineSn;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'actions'      => 'actions',
        'batchNum'     => 'batchNum',
        'clientStatus' => 'clientStatus',
        'createTime'   => 'createTime',
        'ip'           => 'ip',
        'machineSn'    => 'machineSn',
        'status'       => 'status',
        'updateTime'   => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
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

        if (null !== $this->batchNum) {
            $res['batchNum'] = $this->batchNum;
        }

        if (null !== $this->clientStatus) {
            $res['clientStatus'] = $this->clientStatus;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }

        if (null !== $this->machineSn) {
            $res['machineSn'] = $this->machineSn;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['batchNum'])) {
            $model->batchNum = $map['batchNum'];
        }

        if (isset($map['clientStatus'])) {
            $model->clientStatus = $map['clientStatus'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }

        if (isset($map['machineSn'])) {
            $model->machineSn = $map['machineSn'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
