<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateConfigRuleSummaryByRiskLevelRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-3a58626622af0005****
     *
     * @var string
     */
    public $aggregatorId;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateConfigRuleSummaryByRiskLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }

        return $model;
    }
}
