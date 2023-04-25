<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceResponseBody\data\numberList;

use AlibabaCloud\Tea\Model;

class skillGroups extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example skillgroup
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $phoneNumberCount;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example 3
     *
     * @var int
     */
    public $userCount;
    protected $_name = [
        'description'      => 'Description',
        'displayName'      => 'DisplayName',
        'instanceId'       => 'InstanceId',
        'name'             => 'Name',
        'phoneNumberCount' => 'PhoneNumberCount',
        'skillGroupId'     => 'SkillGroupId',
        'userCount'        => 'UserCount',
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
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        return $model;
    }
}
