<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesResponseBody\modules;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'key',
        'tagKey' => 'tagKey',
        'tagValue' => 'tagValue',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->tagKey) {
            $res['tagKey'] = $this->tagKey;
        }

        if (null !== $this->tagValue) {
            $res['tagValue'] = $this->tagValue;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['tagKey'])) {
            $model->tagKey = $map['tagKey'];
        }

        if (isset($map['tagValue'])) {
            $model->tagValue = $map['tagValue'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
