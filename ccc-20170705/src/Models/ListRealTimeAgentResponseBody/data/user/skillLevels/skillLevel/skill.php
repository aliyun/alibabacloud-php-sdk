<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRealTimeAgentResponseBody\data\user\skillLevels\skillLevel;

use AlibabaCloud\Tea\Model;

class skill extends Model
{
    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $skillGroupDescription;
    protected $_name = [
        'skillGroupId'          => 'SkillGroupId',
        'skillGroupName'        => 'SkillGroupName',
        'instanceId'            => 'InstanceId',
        'skillGroupDescription' => 'SkillGroupDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->skillGroupDescription) {
            $res['SkillGroupDescription'] = $this->skillGroupDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skill
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupDescription'])) {
            $model->skillGroupDescription = $map['SkillGroupDescription'];
        }

        return $model;
    }
}
