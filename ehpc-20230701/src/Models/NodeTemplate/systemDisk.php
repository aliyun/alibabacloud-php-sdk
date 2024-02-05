<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\NodeTemplate;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @example cloud_auto
     *
     * @var string
     */
    public $category;

    /**
     * @example PL0
     *
     * @var string
     */
    public $level;

    /**
     * @example 40
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category' => 'Category',
        'level'    => 'Level',
        'size'     => 'Size',
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
