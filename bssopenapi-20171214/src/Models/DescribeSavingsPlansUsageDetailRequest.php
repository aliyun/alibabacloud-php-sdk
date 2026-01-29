<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageDetailRequest\filterParam;

class DescribeSavingsPlansUsageDetailRequest extends Model
{
    /**
     * @var int
     */
    public $billOwnerId;

    /**
     * @var string
     */
    public $endPeriod;

    /**
     * @var filterParam
     */
    public $filterParam;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string
     */
    public $startPeriod;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'billOwnerId' => 'BillOwnerId',
        'endPeriod' => 'EndPeriod',
        'filterParam' => 'FilterParam',
        'maxResults' => 'MaxResults',
        'periodType' => 'PeriodType',
        'startPeriod' => 'StartPeriod',
        'token' => 'Token',
    ];

    public function validate()
    {
        if (null !== $this->filterParam) {
            $this->filterParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billOwnerId) {
            $res['BillOwnerId'] = $this->billOwnerId;
        }

        if (null !== $this->endPeriod) {
            $res['EndPeriod'] = $this->endPeriod;
        }

        if (null !== $this->filterParam) {
            $res['FilterParam'] = null !== $this->filterParam ? $this->filterParam->toArray($noStream) : $this->filterParam;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }

        if (null !== $this->startPeriod) {
            $res['StartPeriod'] = $this->startPeriod;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['BillOwnerId'])) {
            $model->billOwnerId = $map['BillOwnerId'];
        }

        if (isset($map['EndPeriod'])) {
            $model->endPeriod = $map['EndPeriod'];
        }

        if (isset($map['FilterParam'])) {
            $model->filterParam = filterParam::fromMap($map['FilterParam']);
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }

        if (isset($map['StartPeriod'])) {
            $model->startPeriod = $map['StartPeriod'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
