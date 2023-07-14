<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceIniProperty extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $example;

    /**
     * @var string
     */
    public $key;

    /**
     * @var bool
     */
    public $secret;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'defaultValue' => 'defaultValue',
        'description'  => 'description',
        'example'      => 'example',
        'key'          => 'key',
        'secret'       => 'secret',
        'value'        => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['defaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->example) {
            $res['example'] = $this->example;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->secret) {
            $res['secret'] = $this->secret;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceIniProperty
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['defaultValue'])) {
            $model->defaultValue = $map['defaultValue'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['example'])) {
            $model->example = $map['example'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['secret'])) {
            $model->secret = $map['secret'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
