<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @example 110109200001214284
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
