<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesRequest\groupMetricRules;

class CreateGroupMetricRulesRequest extends Model
{
    /**
     * @var int
     */
    public $groupId;

    /**
     * @var groupMetricRules[]
     */
    public $groupMetricRules;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'groupId' => 'GroupId',
        'groupMetricRules' => 'GroupMetricRules',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->groupMetricRules)) {
            Model::validateArray($this->groupMetricRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupMetricRules) {
            if (\is_array($this->groupMetricRules)) {
                $res['GroupMetricRules'] = [];
                $n1 = 0;
                foreach ($this->groupMetricRules as $item1) {
                    $res['GroupMetricRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['GroupMetricRules'])) {
            if (!empty($map['GroupMetricRules'])) {
                $model->groupMetricRules = [];
                $n1 = 0;
                foreach ($map['GroupMetricRules'] as $item1) {
                    $model->groupMetricRules[$n1] = groupMetricRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
