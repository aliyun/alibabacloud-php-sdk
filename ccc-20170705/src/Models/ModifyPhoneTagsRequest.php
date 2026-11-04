<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class ModifyPhoneTagsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $serviceTag;

    /**
     * @var string[]
     */
    public $skillGroupIdList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'serviceTag' => 'ServiceTag',
        'skillGroupIdList' => 'SkillGroupIdList',
    ];

    public function validate()
    {
        if (\is_array($this->skillGroupIdList)) {
            Model::validateArray($this->skillGroupIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->serviceTag) {
            $res['ServiceTag'] = $this->serviceTag;
        }

        if (null !== $this->skillGroupIdList) {
            if (\is_array($this->skillGroupIdList)) {
                $res['SkillGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->skillGroupIdList as $item1) {
                    $res['SkillGroupIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ServiceTag'])) {
            $model->serviceTag = $map['ServiceTag'];
        }

        if (isset($map['SkillGroupIdList'])) {
            if (!empty($map['SkillGroupIdList'])) {
                $model->skillGroupIdList = [];
                $n1 = 0;
                foreach ($map['SkillGroupIdList'] as $item1) {
                    $model->skillGroupIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
