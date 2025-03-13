<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\deployMachineInfo\deployMachines;
use AlibabaCloud\Tea\Model;

class deployMachineInfo extends Model
{
    /**
     * @example 11
     *
     * @var int
     */
    public $batchNum;

    /**
     * @var deployMachines[]
     */
    public $deployMachines;

    /**
     * @example 1111
     *
     * @var int
     */
    public $hostGroupId;
    protected $_name = [
        'batchNum'       => 'batchNum',
        'deployMachines' => 'deployMachines',
        'hostGroupId'    => 'hostGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchNum) {
            $res['batchNum'] = $this->batchNum;
        }
        if (null !== $this->deployMachines) {
            $res['deployMachines'] = [];
            if (null !== $this->deployMachines && \is_array($this->deployMachines)) {
                $n = 0;
                foreach ($this->deployMachines as $item) {
                    $res['deployMachines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostGroupId) {
            $res['hostGroupId'] = $this->hostGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployMachineInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['batchNum'])) {
            $model->batchNum = $map['batchNum'];
        }
        if (isset($map['deployMachines'])) {
            if (!empty($map['deployMachines'])) {
                $model->deployMachines = [];
                $n                     = 0;
                foreach ($map['deployMachines'] as $item) {
                    $model->deployMachines[$n++] = null !== $item ? deployMachines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['hostGroupId'])) {
            $model->hostGroupId = $map['hostGroupId'];
        }

        return $model;
    }
}
