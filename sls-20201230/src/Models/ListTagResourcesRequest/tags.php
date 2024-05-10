<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of the tag that you want to use to filter resources. For example, if you set the key to `"test-key"`, only resources to which the key is added are returned.``
     *
     * This parameter is required.
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag that you want to use to filter resources. If you set the value to null, resources are filtered based only on the key of the tag.
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'key',
        'value' => 'value',
    ];

    public function validate()
    {
    }

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
     * @return tags
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
