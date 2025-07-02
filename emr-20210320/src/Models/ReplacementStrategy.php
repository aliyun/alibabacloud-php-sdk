<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->instanceCategories)) {
            Model::validateArray($this->instanceCategories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCategories) {
            if (\is_array($this->instanceCategories)) {
                $res['InstanceCategories'] = [];
                $n1 = 0;
                foreach ($this->instanceCategories as $item1) {
                    $res['InstanceCategories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceCategories'])) {
            if (!empty($map['InstanceCategories'])) {
                $model->instanceCategories = [];
                $n1 = 0;
                foreach ($map['InstanceCategories'] as $item1) {
                    $model->instanceCategories[$n1] = InstanceCategory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
