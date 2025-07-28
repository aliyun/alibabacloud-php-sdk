<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return QueryPeriodBudgetBillRequest
     */
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
