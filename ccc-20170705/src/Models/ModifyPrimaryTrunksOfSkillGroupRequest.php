<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class ModifyPrimaryTrunksOfSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $primaryProviderName;

    /**
     * @var string
     */
    public $skillGroupId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'primaryProviderName' => 'PrimaryProviderName',
        'skillGroupId' => 'SkillGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->primaryProviderName)) {
            Model::validateArray($this->primaryProviderName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->primaryProviderName) {
            if (\is_array($this->primaryProviderName)) {
                $res['PrimaryProviderName'] = [];
                $n1 = 0;
                foreach ($this->primaryProviderName as $item1) {
                    $res['PrimaryProviderName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
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

        if (isset($map['PrimaryProviderName'])) {
            if (!empty($map['PrimaryProviderName'])) {
                $model->primaryProviderName = [];
                $n1 = 0;
                foreach ($map['PrimaryProviderName'] as $item1) {
                    $model->primaryProviderName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
