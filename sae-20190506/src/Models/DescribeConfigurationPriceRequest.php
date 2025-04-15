<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class DescribeConfigurationPriceRequest extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $workload;
    protected $_name = [
        'cpu' => 'Cpu',
        'memory' => 'Memory',
        'resourceType' => 'ResourceType',
        'workload' => 'Workload',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->workload) {
            $res['Workload'] = $this->workload;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Workload'])) {
            $model->workload = $map['Workload'];
        }

        return $model;
    }
}
