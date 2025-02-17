<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponseBody\resourcePrices;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $ruleDescId;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'ruleDescId'  => 'RuleDescId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
