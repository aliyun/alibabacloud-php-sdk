<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AddNumbersToSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instNumberGroupIdList;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ["0103182****","0102387****"]
     *
     * @var string
     */
    public $numberList;

    /**
     * @description This parameter is required.
     *
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;
    protected $_name = [
        'instNumberGroupIdList' => 'InstNumberGroupIdList',
        'instanceId'            => 'InstanceId',
        'numberList'            => 'NumberList',
        'skillGroupId'          => 'SkillGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instNumberGroupIdList) {
            $res['InstNumberGroupIdList'] = $this->instNumberGroupIdList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddNumbersToSkillGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstNumberGroupIdList'])) {
            $model->instNumberGroupIdList = $map['InstNumberGroupIdList'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
