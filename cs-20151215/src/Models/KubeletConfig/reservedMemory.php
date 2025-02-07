<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\KubeletConfig;

use AlibabaCloud\Dara\Model;

class reservedMemory extends Model
{
    /**
     * @var mixed[]
     */
    public $limits;
    /**
     * @var int
     */
    public $numaNode;
    protected $_name = [
        'limits'   => 'limits',
        'numaNode' => 'numaNode',
    ];

    public function validate()
    {
        if (\is_array($this->limits)) {
            Model::validateArray($this->limits);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limits) {
            if (\is_array($this->limits)) {
                $res['limits'] = [];
                foreach ($this->limits as $key1 => $value1) {
                    $res['limits'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->numaNode) {
            $res['numaNode'] = $this->numaNode;
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
        if (isset($map['limits'])) {
            if (!empty($map['limits'])) {
                $model->limits = [];
                foreach ($map['limits'] as $key1 => $value1) {
                    $model->limits[$key1] = $value1;
                }
            }
        }

        if (isset($map['numaNode'])) {
            $model->numaNode = $map['numaNode'];
        }

        return $model;
    }
}
