<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ListTagKeysResponseBody;

use AlibabaCloud\Tea\Model;

class keys extends Model
{
    /**
     * @description The type of the tag. Valid values:
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
     * @description The key of the tag.
     *
     * @example demoTagKey
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'category' => 'Category',
        'key'      => 'Key',
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
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
