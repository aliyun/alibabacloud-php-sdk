<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigurationPriceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $cpu;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $workload;
    protected $_name = [
        'cpu'      => 'Cpu',
        'memory'   => 'Memory',
        'workload' => 'Workload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->workload) {
            $res['Workload'] = $this->workload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigurationPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Workload'])) {
            $model->workload = $map['Workload'];
        }

        return $model;
    }
}
