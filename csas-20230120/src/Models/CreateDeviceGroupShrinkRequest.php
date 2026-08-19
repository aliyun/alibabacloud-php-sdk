<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateDeviceGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dynamicOperator;

    /**
     * @var string
     */
    public $dynamicRuleShrink;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'dynamicOperator' => 'DynamicOperator',
        'dynamicRuleShrink' => 'DynamicRule',
        'groupType' => 'GroupType',
        'name' => 'Name',
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

        if (null !== $this->dynamicOperator) {
            $res['DynamicOperator'] = $this->dynamicOperator;
        }

        if (null !== $this->dynamicRuleShrink) {
            $res['DynamicRule'] = $this->dynamicRuleShrink;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['DynamicOperator'])) {
            $model->dynamicOperator = $map['DynamicOperator'];
        }

        if (isset($map['DynamicRule'])) {
            $model->dynamicRuleShrink = $map['DynamicRule'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
