<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListBriefSkillGroupsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
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
     * @var string
     */
    public $skillGroupName;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'displayName'      => 'DisplayName',
        'description'      => 'Description',
        'phoneNumberCount' => 'PhoneNumberCount',
        'skillGroupId'     => 'SkillGroupId',
        'skillGroupName'   => 'SkillGroupName',
        'userCount'        => 'UserCount',
        'instanceId'       => 'InstanceId',
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
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
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
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
