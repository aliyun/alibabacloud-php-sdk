<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListManagedRulesGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class managedRulesGroups extends Model
{
    /**
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @example 1000
     *
     * @var int
     */
    public $ruleCount;
    protected $_name = [
        'name'      => 'Name',
        'ruleCount' => 'RuleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return managedRulesGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        return $model;
    }
}
