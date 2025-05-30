<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;

class QueryPeriodBudgetBillRequest extends Model
{
    /**
     * @var string
     */
    public $objectIds;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $period;
    protected $_name = [
        'objectIds' => 'objectIds',
        'objectType' => 'objectType',
        'period' => 'period',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectIds) {
            $res['objectIds'] = $this->objectIds;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
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
        if (isset($map['objectIds'])) {
            $model->objectIds = $map['objectIds'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        return $model;
    }
}
