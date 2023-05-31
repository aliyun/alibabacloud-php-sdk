<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemAggregationRulesResponseBody;

use AlibabaCloud\Tea\Model;

class aggregationList extends Model
{
    /**
     * @description The ID of the aggregation type.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the aggregation type.
     *
     * @example Remote control\*\*\*\*
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of rules that are of the aggregation type.
     *
     * @example 0
     *
     * @var int
     */
    public $ruleCount;
    protected $_name = [
        'id'        => 'Id',
        'name'      => 'Name',
        'ruleCount' => 'RuleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        return $model;
    }
}
