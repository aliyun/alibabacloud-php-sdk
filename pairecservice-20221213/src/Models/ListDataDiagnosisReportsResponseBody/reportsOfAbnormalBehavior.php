<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody;

use AlibabaCloud\Dara\Model;

class reportsOfAbnormalBehavior extends Model
{
    /**
     * @var string
     */
    public $ds;

    /**
     * @var string
     */
    public $rankId;

    /**
     * @var string
     */
    public $conversionRate;

    /**
     * @var string
     */
    public $conversionRateIds;

    /**
     * @var string
     */
    public $downStreamCount;

    /**
     * @var string
     */
    public $downStreamCountIds;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string
     */
    public $upStreamCount;

    /**
     * @var string
     */
    public $upStreamCountIds;

    /**
     * @var string
     */
    public $distribution;

    /**
     * @var string
     */
    public $indicatorName;

    /**
     * @var string
     */
    public $exceptionRate;
    protected $_name = [
        'ds' => 'Ds',
        'rankId' => 'RankId',
        'conversionRate' => 'ConversionRate',
        'conversionRateIds' => 'ConversionRateIds',
        'downStreamCount' => 'DownStreamCount',
        'downStreamCountIds' => 'DownStreamCountIds',
        'granularity' => 'Granularity',
        'upStreamCount' => 'UpStreamCount',
        'upStreamCountIds' => 'UpStreamCountIds',
        'distribution' => 'Distribution',
        'indicatorName' => 'IndicatorName',
        'exceptionRate' => 'ExceptionRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ds) {
            $res['Ds'] = $this->ds;
        }

        if (null !== $this->rankId) {
            $res['RankId'] = $this->rankId;
        }

        if (null !== $this->conversionRate) {
            $res['ConversionRate'] = $this->conversionRate;
        }

        if (null !== $this->conversionRateIds) {
            $res['ConversionRateIds'] = $this->conversionRateIds;
        }

        if (null !== $this->downStreamCount) {
            $res['DownStreamCount'] = $this->downStreamCount;
        }

        if (null !== $this->downStreamCountIds) {
            $res['DownStreamCountIds'] = $this->downStreamCountIds;
        }

        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }

        if (null !== $this->upStreamCount) {
            $res['UpStreamCount'] = $this->upStreamCount;
        }

        if (null !== $this->upStreamCountIds) {
            $res['UpStreamCountIds'] = $this->upStreamCountIds;
        }

        if (null !== $this->distribution) {
            $res['Distribution'] = $this->distribution;
        }

        if (null !== $this->indicatorName) {
            $res['IndicatorName'] = $this->indicatorName;
        }

        if (null !== $this->exceptionRate) {
            $res['ExceptionRate'] = $this->exceptionRate;
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
        if (isset($map['Ds'])) {
            $model->ds = $map['Ds'];
        }

        if (isset($map['RankId'])) {
            $model->rankId = $map['RankId'];
        }

        if (isset($map['ConversionRate'])) {
            $model->conversionRate = $map['ConversionRate'];
        }

        if (isset($map['ConversionRateIds'])) {
            $model->conversionRateIds = $map['ConversionRateIds'];
        }

        if (isset($map['DownStreamCount'])) {
            $model->downStreamCount = $map['DownStreamCount'];
        }

        if (isset($map['DownStreamCountIds'])) {
            $model->downStreamCountIds = $map['DownStreamCountIds'];
        }

        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }

        if (isset($map['UpStreamCount'])) {
            $model->upStreamCount = $map['UpStreamCount'];
        }

        if (isset($map['UpStreamCountIds'])) {
            $model->upStreamCountIds = $map['UpStreamCountIds'];
        }

        if (isset($map['Distribution'])) {
            $model->distribution = $map['Distribution'];
        }

        if (isset($map['IndicatorName'])) {
            $model->indicatorName = $map['IndicatorName'];
        }

        if (isset($map['ExceptionRate'])) {
            $model->exceptionRate = $map['ExceptionRate'];
        }

        return $model;
    }
}
