<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreatePerformanceViewRequest\viewDetail;

use AlibabaCloud\SDK\Adb\V20211201\Models\CreatePerformanceViewRequest\viewDetail\categories\keys;
use AlibabaCloud\Tea\Model;

class categories extends Model
{
    /**
     * @example Node
     *
     * @var string
     */
    public $category;

    /**
     * @var keys[]
     */
    public $keys;
    protected $_name = [
        'category' => 'Category',
        'keys'     => 'Keys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->keys) {
            $res['Keys'] = [];
            if (null !== $this->keys && \is_array($this->keys)) {
                $n = 0;
                foreach ($this->keys as $item) {
                    $res['Keys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = [];
                $n           = 0;
                foreach ($map['Keys'] as $item) {
                    $model->keys[$n++] = null !== $item ? keys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
