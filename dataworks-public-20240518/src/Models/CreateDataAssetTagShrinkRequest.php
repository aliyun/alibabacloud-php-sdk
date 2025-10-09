<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateDataAssetTagShrinkRequest extends Model
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
     * @var string
     */
    public $managersShrink;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var string
     */
    public $valuesShrink;
    protected $_name = [
        'description' => 'Description',
        'key' => 'Key',
        'managersShrink' => 'Managers',
        'valueType' => 'ValueType',
        'valuesShrink' => 'Values',
    ];

    public function validate()
    {
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

        if (null !== $this->managersShrink) {
            $res['Managers'] = $this->managersShrink;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        if (null !== $this->valuesShrink) {
            $res['Values'] = $this->valuesShrink;
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
            $model->managersShrink = $map['Managers'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        if (isset($map['Values'])) {
            $model->valuesShrink = $map['Values'];
        }

        return $model;
    }
}
