<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class InstallSkillsRequest extends Model
{
    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string[]
     */
    public $skillIds;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'skillIds' => 'SkillIds',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->skillIds)) {
            Model::validateArray($this->skillIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillIds) {
            if (\is_array($this->skillIds)) {
                $res['SkillIds'] = [];
                $n1 = 0;
                foreach ($this->skillIds as $item1) {
                    $res['SkillIds'][$n1] = $item1;
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
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillIds'])) {
            if (!empty($map['SkillIds'])) {
                $model->skillIds = [];
                $n1 = 0;
                foreach ($map['SkillIds'] as $item1) {
                    $model->skillIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
