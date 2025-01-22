<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateDataAssetTagRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string[]
     */
    public $managers;
    /**
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
        if (\is_array($this->managers)) {
            Model::validateArray($this->managers);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->managers) {
            if (\is_array($this->managers)) {
                $res['Managers'] = [];
                $n1              = 0;
                foreach ($this->managers as $item1) {
                    $res['Managers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1            = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Managers'])) {
            if (!empty($map['Managers'])) {
                $model->managers = [];
                $n1              = 0;
                foreach ($map['Managers'] as $item1) {
                    $model->managers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1            = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
