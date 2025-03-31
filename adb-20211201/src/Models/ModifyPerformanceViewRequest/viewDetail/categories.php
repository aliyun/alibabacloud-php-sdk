<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyPerformanceViewRequest\viewDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyPerformanceViewRequest\viewDetail\categories\keys;

class categories extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var keys[]
     */
    public $keys;
    protected $_name = [
        'category' => 'Category',
        'keys' => 'Keys',
    ];

    public function validate()
    {
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['Keys'] = [];
                $n1 = 0;
                foreach ($this->keys as $item1) {
                    $res['Keys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = [];
                $n1 = 0;
                foreach ($map['Keys'] as $item1) {
                    $model->keys[$n1++] = keys::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
