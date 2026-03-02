<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateProfileRequest;

use AlibabaCloud\Dara\Model;

class attributesOperations extends Model
{
    /**
     * @var string
     */
    public $attributeId;

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
    public $name;

    /**
     * @var string
     */
    public $op;
    protected $_name = [
        'attributeId' => 'AttributeId',
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'name' => 'Name',
        'op' => 'Op',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeId) {
            $res['AttributeId'] = $this->attributeId;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->op) {
            $res['Op'] = $this->op;
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
        if (isset($map['AttributeId'])) {
            $model->attributeId = $map['AttributeId'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }

        return $model;
    }
}
