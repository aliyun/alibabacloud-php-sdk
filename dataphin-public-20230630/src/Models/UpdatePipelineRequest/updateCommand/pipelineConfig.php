<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdatePipelineRequest\updateCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdatePipelineRequest\updateCommand\pipelineConfig\hops;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdatePipelineRequest\updateCommand\pipelineConfig\steps;

class pipelineConfig extends Model
{
    /**
     * @var hops[]
     */
    public $hops;

    /**
     * @var steps[]
     */
    public $steps;
    protected $_name = [
        'hops' => 'Hops',
        'steps' => 'Steps',
    ];

    public function validate()
    {
        if (\is_array($this->hops)) {
            Model::validateArray($this->hops);
        }
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hops) {
            if (\is_array($this->hops)) {
                $res['Hops'] = [];
                $n1 = 0;
                foreach ($this->hops as $item1) {
                    $res['Hops'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['Steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['Steps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Hops'])) {
            if (!empty($map['Hops'])) {
                $model->hops = [];
                $n1 = 0;
                foreach ($map['Hops'] as $item1) {
                    $model->hops[$n1] = hops::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['Steps'] as $item1) {
                    $model->steps[$n1] = steps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
