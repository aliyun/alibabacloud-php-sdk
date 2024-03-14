<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListTagKeysResponseBody\keys;

use AlibabaCloud\Tea\Model;

class key extends Model
{
    /**
     * @description The type of the resource tag. Valid values:
     *
     *   custom
     *   system
     *
     * @example custom
     *
     * @var string
     */
    public $category;

    /**
     * @description The description of the tag key.
     *
     * @example Business team
     *
     * @var string
     */
    public $description;

    /**
     * @description The tag key.
     *
     * @example team
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'category'    => 'Category',
        'description' => 'Description',
        'key'         => 'Key',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return key
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
