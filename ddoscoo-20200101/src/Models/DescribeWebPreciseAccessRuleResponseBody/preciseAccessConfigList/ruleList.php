<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponseBody\preciseAccessConfigList;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponseBody\preciseAccessConfigList\ruleList\conditionList;
use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $expires;

    /**
     * @var string
     */
    public $name;

    /**
     * @var conditionList[]
     */
    public $conditionList;
    protected $_name = [
        'action'        => 'Action',
        'owner'         => 'Owner',
        'expires'       => 'Expires',
        'name'          => 'Name',
        'conditionList' => 'ConditionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->conditionList) {
            $res['ConditionList'] = [];
            if (null !== $this->conditionList && \is_array($this->conditionList)) {
                $n = 0;
                foreach ($this->conditionList as $item) {
                    $res['ConditionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ConditionList'])) {
            if (!empty($map['ConditionList'])) {
                $model->conditionList = [];
                $n                    = 0;
                foreach ($map['ConditionList'] as $item) {
                    $model->conditionList[$n++] = null !== $item ? conditionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
