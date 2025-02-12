<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponseBody\preciseAccessConfigList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponseBody\preciseAccessConfigList\ruleList\conditionList;

class ruleList extends Model
{
    /**
     * @var string
     */
    public $action;
    /**
     * @var conditionList[]
     */
    public $conditionList;
    /**
     * @var int
     */
    public $expires;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    protected $_name = [
        'action'        => 'Action',
        'conditionList' => 'ConditionList',
        'expires'       => 'Expires',
        'name'          => 'Name',
        'owner'         => 'Owner',
    ];

    public function validate()
    {
        if (\is_array($this->conditionList)) {
            Model::validateArray($this->conditionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->conditionList) {
            if (\is_array($this->conditionList)) {
                $res['ConditionList'] = [];
                $n1                   = 0;
                foreach ($this->conditionList as $item1) {
                    $res['ConditionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['ConditionList'])) {
            if (!empty($map['ConditionList'])) {
                $model->conditionList = [];
                $n1                   = 0;
                foreach ($map['ConditionList'] as $item1) {
                    $model->conditionList[$n1++] = conditionList::fromMap($item1);
                }
            }
        }

        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        return $model;
    }
}
