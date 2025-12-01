<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class AddCheckResultWhiteListRequest extends Model
{
    /**
     * @var int[]
     */
    public $checkIds;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'checkIds' => 'CheckIds',
        'instanceIds' => 'InstanceIds',
        'remark' => 'Remark',
        'ruleType' => 'RuleType',
    ];

    public function validate()
    {
        if (\is_array($this->checkIds)) {
            Model::validateArray($this->checkIds);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkIds) {
            if (\is_array($this->checkIds)) {
                $res['CheckIds'] = [];
                $n1 = 0;
                foreach ($this->checkIds as $item1) {
                    $res['CheckIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
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
        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = [];
                $n1 = 0;
                foreach ($map['CheckIds'] as $item1) {
                    $model->checkIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
