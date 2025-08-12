<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleRequest\groupRules;

class PutMonitorGroupDynamicRuleRequest extends Model
{
    /**
     * @var int
     */
    public $groupId;

    /**
     * @var groupRules[]
     */
    public $groupRules;

    /**
     * @var bool
     */
    public $isAsync;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'groupId' => 'GroupId',
        'groupRules' => 'GroupRules',
        'isAsync' => 'IsAsync',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->groupRules)) {
            Model::validateArray($this->groupRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupRules) {
            if (\is_array($this->groupRules)) {
                $res['GroupRules'] = [];
                $n1 = 0;
                foreach ($this->groupRules as $item1) {
                    $res['GroupRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isAsync) {
            $res['IsAsync'] = $this->isAsync;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupRules'])) {
            if (!empty($map['GroupRules'])) {
                $model->groupRules = [];
                $n1 = 0;
                foreach ($map['GroupRules'] as $item1) {
                    $model->groupRules[$n1] = groupRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IsAsync'])) {
            $model->isAsync = $map['IsAsync'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
