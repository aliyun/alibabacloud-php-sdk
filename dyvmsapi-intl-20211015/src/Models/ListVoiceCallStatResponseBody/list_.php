<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceCallStatResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $answeredCalls;

    /**
     * @var int
     */
    public $answeredRate;

    /**
     * @var int
     */
    public $averageDuration;

    /**
     * @var int
     */
    public $billing;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var int
     */
    public $failedCalls;

    /**
     * @var int
     */
    public $totalCalls;

    /**
     * @var int
     */
    public $totalDuration;
    protected $_name = [
        'answeredCalls'   => 'AnsweredCalls',
        'answeredRate'    => 'AnsweredRate',
        'averageDuration' => 'AverageDuration',
        'billing'         => 'Billing',
        'businessType'    => 'BusinessType',
        'failedCalls'     => 'FailedCalls',
        'totalCalls'      => 'TotalCalls',
        'totalDuration'   => 'TotalDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answeredCalls) {
            $res['AnsweredCalls'] = $this->answeredCalls;
        }
        if (null !== $this->answeredRate) {
            $res['AnsweredRate'] = $this->answeredRate;
        }
        if (null !== $this->averageDuration) {
            $res['AverageDuration'] = $this->averageDuration;
        }
        if (null !== $this->billing) {
            $res['Billing'] = $this->billing;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->failedCalls) {
            $res['FailedCalls'] = $this->failedCalls;
        }
        if (null !== $this->totalCalls) {
            $res['TotalCalls'] = $this->totalCalls;
        }
        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnsweredCalls'])) {
            $model->answeredCalls = $map['AnsweredCalls'];
        }
        if (isset($map['AnsweredRate'])) {
            $model->answeredRate = $map['AnsweredRate'];
        }
        if (isset($map['AverageDuration'])) {
            $model->averageDuration = $map['AverageDuration'];
        }
        if (isset($map['Billing'])) {
            $model->billing = $map['Billing'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['FailedCalls'])) {
            $model->failedCalls = $map['FailedCalls'];
        }
        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }
        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        return $model;
    }
}
