<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AddPhoneNumberToSkillGroupsRequest extends Model
{
    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 0101234****
     *
     * @var string
     */
    public $number;

    /**
     * @example ["skillgroup1@ccc-test","skillgroup2@ccc-test"]
     *
     * @var string
     */
    public $skillGroupIdList;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'number'           => 'Number',
        'skillGroupIdList' => 'SkillGroupIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->skillGroupIdList) {
            $res['SkillGroupIdList'] = $this->skillGroupIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPhoneNumberToSkillGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['SkillGroupIdList'])) {
            $model->skillGroupIdList = $map['SkillGroupIdList'];
        }

        return $model;
    }
}
