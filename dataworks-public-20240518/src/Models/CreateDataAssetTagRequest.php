<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataAssetTagRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @var string[]
     */
    public $managers;

    /**
     * @example String
     *
     * @var string
     */
    public $valueType;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'description' => 'Description',
        'key'         => 'Key',
        'managers'    => 'Managers',
        'valueType'   => 'ValueType',
        'values'      => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->managers) {
            $res['Managers'] = $this->managers;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataAssetTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Managers'])) {
            if (!empty($map['Managers'])) {
                $model->managers = $map['Managers'];
            }
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
