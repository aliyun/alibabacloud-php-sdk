<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponseBody\resourcePrices;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description Promotion description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Promotion name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Promotion ID.
     *
     * @example 1021199213
     *
     * @var int
     */
    public $ruleDescId;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'ruleDescId' => 'RuleDescId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleDescId) {
            $res['RuleDescId'] = $this->ruleDescId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleDescId'])) {
            $model->ruleDescId = $map['RuleDescId'];
        }

        return $model;
    }
}
