<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateConfigRulesReportRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $reportId;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'reportId'     => 'ReportId',
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
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateConfigRulesReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        return $model;
    }
}
