<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceInstancesResponseBody\logicResource;

use AlibabaCloud\Tea\Model;

class keyList extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $keyAction;

    /**
     * @var string
     */
    public $keyAttribute;

    /**
     * @var string
     */
    public $keyDescription;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'key'            => 'Key',
        'keyAction'      => 'KeyAction',
        'keyAttribute'   => 'KeyAttribute',
        'keyDescription' => 'KeyDescription',
        'value'          => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->keyAction) {
            $res['KeyAction'] = $this->keyAction;
        }
        if (null !== $this->keyAttribute) {
            $res['KeyAttribute'] = $this->keyAttribute;
        }
        if (null !== $this->keyDescription) {
            $res['KeyDescription'] = $this->keyDescription;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['KeyAction'])) {
            $model->keyAction = $map['KeyAction'];
        }
        if (isset($map['KeyAttribute'])) {
            $model->keyAttribute = $map['KeyAttribute'];
        }
        if (isset($map['KeyDescription'])) {
            $model->keyDescription = $map['KeyDescription'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
