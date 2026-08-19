<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListDeviceGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\Rule;

class deviceGroups extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string
     */
    public $dynamicOperator;

    /**
     * @var Rule
     */
    public $dynamicRule;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var string[]
     */
    public $matchDevTags;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'deviceGroupId' => 'DeviceGroupId',
        'dynamicOperator' => 'DynamicOperator',
        'dynamicRule' => 'DynamicRule',
        'groupType' => 'GroupType',
        'isDefault' => 'IsDefault',
        'matchDevTags' => 'MatchDevTags',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (null !== $this->dynamicRule) {
            $this->dynamicRule->validate();
        }
        if (\is_array($this->matchDevTags)) {
            Model::validateArray($this->matchDevTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }

        if (null !== $this->dynamicOperator) {
            $res['DynamicOperator'] = $this->dynamicOperator;
        }

        if (null !== $this->dynamicRule) {
            $res['DynamicRule'] = null !== $this->dynamicRule ? $this->dynamicRule->toArray($noStream) : $this->dynamicRule;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->matchDevTags) {
            if (\is_array($this->matchDevTags)) {
                $res['MatchDevTags'] = [];
                $n1 = 0;
                foreach ($this->matchDevTags as $item1) {
                    $res['MatchDevTags'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }

        if (isset($map['DynamicOperator'])) {
            $model->dynamicOperator = $map['DynamicOperator'];
        }

        if (isset($map['DynamicRule'])) {
            $model->dynamicRule = Rule::fromMap($map['DynamicRule']);
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['MatchDevTags'])) {
            if (!empty($map['MatchDevTags'])) {
                $model->matchDevTags = [];
                $n1 = 0;
                foreach ($map['MatchDevTags'] as $item1) {
                    $model->matchDevTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
