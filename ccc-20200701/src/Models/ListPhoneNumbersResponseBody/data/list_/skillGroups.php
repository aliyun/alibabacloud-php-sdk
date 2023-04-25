<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListPhoneNumbersResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class skillGroups extends Model
{
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
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;
    protected $_name = [
        'displayName'  => 'DisplayName',
        'instanceId'   => 'InstanceId',
        'name'         => 'Name',
        'skillGroupId' => 'SkillGroupId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
