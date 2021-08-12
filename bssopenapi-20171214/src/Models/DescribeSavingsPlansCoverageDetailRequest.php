<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribeSavingsPlansCoverageDetailRequest extends Model
{
    /**
     * @var string
     */
    public $startPeriod;

    /**
     * @var string
     */
    public $endPeriod;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string
     */
    public $token;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $billOwnerId;
    protected $_name = [
        'startPeriod' => 'StartPeriod',
        'endPeriod'   => 'EndPeriod',
        'periodType'  => 'PeriodType',
        'token'       => 'Token',
        'maxResults'  => 'MaxResults',
        'billOwnerId' => 'BillOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startPeriod) {
            $res['StartPeriod'] = $this->startPeriod;
        }
        if (null !== $this->endPeriod) {
            $res['EndPeriod'] = $this->endPeriod;
        }
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->billOwnerId) {
            $res['BillOwnerId'] = $this->billOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSavingsPlansCoverageDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartPeriod'])) {
            $model->startPeriod = $map['StartPeriod'];
        }
        if (isset($map['EndPeriod'])) {
            $model->endPeriod = $map['EndPeriod'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['BillOwnerId'])) {
            $model->billOwnerId = $map['BillOwnerId'];
        }

        return $model;
    }
}
