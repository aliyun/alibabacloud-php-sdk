<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class ListSkillGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $skillGroupId;

    /**
     * @var string[]
     */
    public $skillGroupName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'skillGroupId' => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->skillGroupId)) {
            Model::validateArray($this->skillGroupId);
        }
        if (\is_array($this->skillGroupName)) {
            Model::validateArray($this->skillGroupName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->skillGroupId) {
            if (\is_array($this->skillGroupId)) {
                $res['SkillGroupId'] = [];
                $n1 = 0;
                foreach ($this->skillGroupId as $item1) {
                    $res['SkillGroupId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillGroupName) {
            if (\is_array($this->skillGroupName)) {
                $res['SkillGroupName'] = [];
                $n1 = 0;
                foreach ($this->skillGroupName as $item1) {
                    $res['SkillGroupName'][$n1] = $item1;
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

        if (isset($map['SkillGroupId'])) {
            if (!empty($map['SkillGroupId'])) {
                $model->skillGroupId = [];
                $n1 = 0;
                foreach ($map['SkillGroupId'] as $item1) {
                    $model->skillGroupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillGroupName'])) {
            if (!empty($map['SkillGroupName'])) {
                $model->skillGroupName = [];
                $n1 = 0;
                foreach ($map['SkillGroupName'] as $item1) {
                    $model->skillGroupName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
