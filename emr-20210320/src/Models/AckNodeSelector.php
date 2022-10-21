<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\AckNodeSelector\labels;
use AlibabaCloud\SDK\Emr\V20210320\Models\AckNodeSelector\taints;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taints) {
            $res['Taints'] = [];
            if (null !== $this->taints && \is_array($this->taints)) {
                $n = 0;
                foreach ($this->taints as $item) {
                    $res['Taints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AckNodeSelector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Taints'])) {
            if (!empty($map['Taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['Taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? taints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
