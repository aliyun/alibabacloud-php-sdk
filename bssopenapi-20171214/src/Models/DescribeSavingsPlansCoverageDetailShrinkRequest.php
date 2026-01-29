<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class DescribeSavingsPlansCoverageDetailShrinkRequest extends Model
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
     * @var string
     */
    public $filterParamShrink;

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
        'filterParamShrink' => 'FilterParam',
        'maxResults' => 'MaxResults',
        'periodType' => 'PeriodType',
        'startPeriod' => 'StartPeriod',
        'token' => 'Token',
    ];

    public function validate()
    {
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

        if (null !== $this->filterParamShrink) {
            $res['FilterParam'] = $this->filterParamShrink;
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
            $model->filterParamShrink = $map['FilterParam'];
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
