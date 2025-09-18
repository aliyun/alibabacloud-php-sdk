<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\AckNodeSelector\labels;
use AlibabaCloud\SDK\Emr\V20210320\Models\AckNodeSelector\taints;

class AckNodeSelector extends Model
{
    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var taints[]
     */
    public $taints;
    protected $_name = [
        'labels' => 'Labels',
        'taints' => 'Taints',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->taints)) {
            Model::validateArray($this->taints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taints) {
            if (\is_array($this->taints)) {
                $res['Taints'] = [];
                $n1 = 0;
                foreach ($this->taints as $item1) {
                    $res['Taints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Taints'])) {
            if (!empty($map['Taints'])) {
                $model->taints = [];
                $n1 = 0;
                foreach ($map['Taints'] as $item1) {
                    $model->taints[$n1] = taints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
