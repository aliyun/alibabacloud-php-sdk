<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ReplacementStrategy extends Model
{
    /**
     * @var InstanceCategory[]
     */
    public $instanceCategories;
    protected $_name = [
        'instanceCategories' => 'InstanceCategories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCategories) {
            $res['InstanceCategories'] = [];
            if (null !== $this->instanceCategories && \is_array($this->instanceCategories)) {
                $n = 0;
                foreach ($this->instanceCategories as $item) {
                    $res['InstanceCategories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplacementStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCategories'])) {
            if (!empty($map['InstanceCategories'])) {
                $model->instanceCategories = [];
                $n                         = 0;
                foreach ($map['InstanceCategories'] as $item) {
                    $model->instanceCategories[$n++] = null !== $item ? InstanceCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
