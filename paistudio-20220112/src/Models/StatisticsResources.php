<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class StatisticsResources extends Model
{
    /**
     * @var string
     */
    public $CPU;

    /**
     * @var string
     */
    public $GPU;

    /**
     * @var int
     */
    public $hyperNodeNum;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var int
     */
    public $nodeNum;
    protected $_name = [
        'CPU' => 'CPU',
        'GPU' => 'GPU',
        'hyperNodeNum' => 'HyperNodeNum',
        'memory' => 'Memory',
        'nodeNum' => 'NodeNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }

        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }

        if (null !== $this->hyperNodeNum) {
            $res['HyperNodeNum'] = $this->hyperNodeNum;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
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
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }

        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }

        if (isset($map['HyperNodeNum'])) {
            $model->hyperNodeNum = $map['HyperNodeNum'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        return $model;
    }
}
