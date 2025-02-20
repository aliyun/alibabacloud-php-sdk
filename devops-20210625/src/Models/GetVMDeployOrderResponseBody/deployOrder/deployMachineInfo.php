<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder\deployMachineInfo\deployMachines;

class deployMachineInfo extends Model
{
    /**
     * @var int
     */
    public $batchNum;
    /**
     * @var deployMachines[]
     */
    public $deployMachines;
    /**
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
        if (\is_array($this->deployMachines)) {
            Model::validateArray($this->deployMachines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchNum) {
            $res['batchNum'] = $this->batchNum;
        }

        if (null !== $this->deployMachines) {
            if (\is_array($this->deployMachines)) {
                $res['deployMachines'] = [];
                $n1                    = 0;
                foreach ($this->deployMachines as $item1) {
                    $res['deployMachines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->hostGroupId) {
            $res['hostGroupId'] = $this->hostGroupId;
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
        if (isset($map['batchNum'])) {
            $model->batchNum = $map['batchNum'];
        }

        if (isset($map['deployMachines'])) {
            if (!empty($map['deployMachines'])) {
                $model->deployMachines = [];
                $n1                    = 0;
                foreach ($map['deployMachines'] as $item1) {
                    $model->deployMachines[$n1++] = deployMachines::fromMap($item1);
                }
            }
        }

        if (isset($map['hostGroupId'])) {
            $model->hostGroupId = $map['hostGroupId'];
        }

        return $model;
    }
}
