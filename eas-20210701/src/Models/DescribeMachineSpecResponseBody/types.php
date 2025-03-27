<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecResponseBody;

use AlibabaCloud\Dara\Model;

class types extends Model
{
    /**
     * @var int
     */
    public $CPU;

    /**
     * @var int[]
     */
    public $memory;
    protected $_name = [
        'CPU' => 'CPU',
        'memory' => 'Memory',
    ];

    public function validate()
    {
        if (\is_array($this->memory)) {
            Model::validateArray($this->memory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }

        if (null !== $this->memory) {
            if (\is_array($this->memory)) {
                $res['Memory'] = [];
                $n1 = 0;
                foreach ($this->memory as $item1) {
                    $res['Memory'][$n1++] = $item1;
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
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }

        if (isset($map['Memory'])) {
            if (!empty($map['Memory'])) {
                $model->memory = [];
                $n1 = 0;
                foreach ($map['Memory'] as $item1) {
                    $model->memory[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
