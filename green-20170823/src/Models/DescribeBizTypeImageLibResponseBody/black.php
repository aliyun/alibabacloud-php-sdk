<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeImageLibResponseBody;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeImageLibResponseBody\black\all;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeImageLibResponseBody\black\selected;
use AlibabaCloud\Tea\Model;

class black extends Model
{
    /**
     * @var all[]
     */
    public $all;

    /**
     * @var selected[]
     */
    public $selected;
    protected $_name = [
        'all'      => 'All',
        'selected' => 'Selected',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = [];
            if (null !== $this->all && \is_array($this->all)) {
                $n = 0;
                foreach ($this->all as $item) {
                    $res['All'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->selected) {
            $res['Selected'] = [];
            if (null !== $this->selected && \is_array($this->selected)) {
                $n = 0;
                foreach ($this->selected as $item) {
                    $res['Selected'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return black
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            if (!empty($map['All'])) {
                $model->all = [];
                $n          = 0;
                foreach ($map['All'] as $item) {
                    $model->all[$n++] = null !== $item ? all::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Selected'])) {
            if (!empty($map['Selected'])) {
                $model->selected = [];
                $n               = 0;
                foreach ($map['Selected'] as $item) {
                    $model->selected[$n++] = null !== $item ? selected::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
