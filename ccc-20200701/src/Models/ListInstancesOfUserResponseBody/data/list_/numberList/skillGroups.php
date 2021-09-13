<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesOfUserResponseBody\data\list_\numberList;

use AlibabaCloud\Tea\Model;

class skillGroups extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $phoneNumberCount;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'displayName'      => 'DisplayName',
        'description'      => 'Description',
        'phoneNumberCount' => 'PhoneNumberCount',
        'skillGroupId'     => 'SkillGroupId',
        'userCount'        => 'UserCount',
        'instanceId'       => 'InstanceId',
        'name'             => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->phoneNumberCount) {
            $res['PhoneNumberCount'] = $this->phoneNumberCount;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PhoneNumberCount'])) {
            $model->phoneNumberCount = $map['PhoneNumberCount'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
