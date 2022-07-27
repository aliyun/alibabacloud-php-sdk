<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\deployMachineInfo;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\deployMachineInfo\deployMachines\actions;
use AlibabaCloud\Tea\Model;

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

    /**
     * @param array $map
     *
     * @return deployMachines
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
