<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\NodeStatistics\GPUDetails;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\NodeStatistics\hyperNodeDetails;

class NodeStatistics extends Model
{
    /**
     * @var StatisticsResources
     */
    public $actualMinResources;

    /**
     * @var GPUDetails[]
     */
    public $GPUDetails;

    /**
     * @var hyperNodeDetails[]
     */
    public $hyperNodeDetails;

    /**
     * @var StatisticsResources
     */
    public $idleResources;

    /**
     * @var StatisticsResources
     */
    public $schedulableResources;

    /**
     * @var StatisticsResources
     */
    public $systemReservedResources;
    protected $_name = [
        'actualMinResources' => 'ActualMinResources',
        'GPUDetails' => 'GPUDetails',
        'hyperNodeDetails' => 'HyperNodeDetails',
        'idleResources' => 'IdleResources',
        'schedulableResources' => 'SchedulableResources',
        'systemReservedResources' => 'SystemReservedResources',
    ];

    public function validate()
    {
        if (null !== $this->actualMinResources) {
            $this->actualMinResources->validate();
        }
        if (\is_array($this->GPUDetails)) {
            Model::validateArray($this->GPUDetails);
        }
        if (\is_array($this->hyperNodeDetails)) {
            Model::validateArray($this->hyperNodeDetails);
        }
        if (null !== $this->idleResources) {
            $this->idleResources->validate();
        }
        if (null !== $this->schedulableResources) {
            $this->schedulableResources->validate();
        }
        if (null !== $this->systemReservedResources) {
            $this->systemReservedResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualMinResources) {
            $res['ActualMinResources'] = null !== $this->actualMinResources ? $this->actualMinResources->toArray($noStream) : $this->actualMinResources;
        }

        if (null !== $this->GPUDetails) {
            if (\is_array($this->GPUDetails)) {
                $res['GPUDetails'] = [];
                $n1 = 0;
                foreach ($this->GPUDetails as $item1) {
                    $res['GPUDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hyperNodeDetails) {
            if (\is_array($this->hyperNodeDetails)) {
                $res['HyperNodeDetails'] = [];
                $n1 = 0;
                foreach ($this->hyperNodeDetails as $item1) {
                    $res['HyperNodeDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->idleResources) {
            $res['IdleResources'] = null !== $this->idleResources ? $this->idleResources->toArray($noStream) : $this->idleResources;
        }

        if (null !== $this->schedulableResources) {
            $res['SchedulableResources'] = null !== $this->schedulableResources ? $this->schedulableResources->toArray($noStream) : $this->schedulableResources;
        }

        if (null !== $this->systemReservedResources) {
            $res['SystemReservedResources'] = null !== $this->systemReservedResources ? $this->systemReservedResources->toArray($noStream) : $this->systemReservedResources;
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
        if (isset($map['ActualMinResources'])) {
            $model->actualMinResources = StatisticsResources::fromMap($map['ActualMinResources']);
        }

        if (isset($map['GPUDetails'])) {
            if (!empty($map['GPUDetails'])) {
                $model->GPUDetails = [];
                $n1 = 0;
                foreach ($map['GPUDetails'] as $item1) {
                    $model->GPUDetails[$n1] = GPUDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HyperNodeDetails'])) {
            if (!empty($map['HyperNodeDetails'])) {
                $model->hyperNodeDetails = [];
                $n1 = 0;
                foreach ($map['HyperNodeDetails'] as $item1) {
                    $model->hyperNodeDetails[$n1] = hyperNodeDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IdleResources'])) {
            $model->idleResources = StatisticsResources::fromMap($map['IdleResources']);
        }

        if (isset($map['SchedulableResources'])) {
            $model->schedulableResources = StatisticsResources::fromMap($map['SchedulableResources']);
        }

        if (isset($map['SystemReservedResources'])) {
            $model->systemReservedResources = StatisticsResources::fromMap($map['SystemReservedResources']);
        }

        return $model;
    }
}
