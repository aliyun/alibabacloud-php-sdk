<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\AckNodePool;

use AlibabaCloud\SDK\Emr\V20210320\Models\AckNodePool\nodeSelector\labels;
use AlibabaCloud\SDK\Emr\V20210320\Models\AckNodePool\nodeSelector\taints;
use AlibabaCloud\Tea\Model;

class nodeSelector extends Model
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
     * @return nodeSelector
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
