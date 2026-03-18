<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyChargeTypePriceResponseBody\data;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var float
     */
    public $amount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ruleDescId;
    protected $_name = [
        'amount' => 'Amount',
        'name' => 'Name',
        'ruleDescId' => 'RuleDescId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
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
