<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\FilePutUserTagsRequest;

use AlibabaCloud\Tea\Model;

class userTags extends Model
{
    /**
     * @description The name of the tag. The tag name cannot be empty and cannot contain number signs (#).
     *
     * This parameter is required.
     *
     * @example tag
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag. The tag value cannot contain number signs (#).
     *
     * @example value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'key',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
