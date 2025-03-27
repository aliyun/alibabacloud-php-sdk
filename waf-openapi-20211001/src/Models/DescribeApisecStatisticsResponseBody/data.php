<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $actioned;

    /**
     * @var int
     */
    public $api;

    /**
     * @var int
     */
    public $confirmed;

    /**
     * @var int
     */
    public $domain;

    /**
     * @var int
     */
    public $fixed;

    /**
     * @var int
     */
    public $high;

    /**
     * @var int
     */
    public $ignore;

    /**
     * @var int
     */
    public $low;

    /**
     * @var int
     */
    public $medium;

    /**
     * @var int
     */
    public $toBeConfirmed;

    /**
     * @var int
     */
    public $toBeFixed;

    /**
     * @var string
     */
    public $todayHigh;

    /**
     * @var int
     */
    public $todayLow;

    /**
     * @var string
     */
    public $todayMedium;

    /**
     * @var string
     */
    public $todayTotal;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'actioned' => 'Actioned',
        'api' => 'Api',
        'confirmed' => 'Confirmed',
        'domain' => 'Domain',
        'fixed' => 'Fixed',
        'high' => 'High',
        'ignore' => 'Ignore',
        'low' => 'Low',
        'medium' => 'Medium',
        'toBeConfirmed' => 'ToBeConfirmed',
        'toBeFixed' => 'ToBeFixed',
        'todayHigh' => 'TodayHigh',
        'todayLow' => 'TodayLow',
        'todayMedium' => 'TodayMedium',
        'todayTotal' => 'TodayTotal',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actioned) {
            $res['Actioned'] = $this->actioned;
        }

        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }

        if (null !== $this->confirmed) {
            $res['Confirmed'] = $this->confirmed;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->fixed) {
            $res['Fixed'] = $this->fixed;
        }

        if (null !== $this->high) {
            $res['High'] = $this->high;
        }

        if (null !== $this->ignore) {
            $res['Ignore'] = $this->ignore;
        }

        if (null !== $this->low) {
            $res['Low'] = $this->low;
        }

        if (null !== $this->medium) {
            $res['Medium'] = $this->medium;
        }

        if (null !== $this->toBeConfirmed) {
            $res['ToBeConfirmed'] = $this->toBeConfirmed;
        }

        if (null !== $this->toBeFixed) {
            $res['ToBeFixed'] = $this->toBeFixed;
        }

        if (null !== $this->todayHigh) {
            $res['TodayHigh'] = $this->todayHigh;
        }

        if (null !== $this->todayLow) {
            $res['TodayLow'] = $this->todayLow;
        }

        if (null !== $this->todayMedium) {
            $res['TodayMedium'] = $this->todayMedium;
        }

        if (null !== $this->todayTotal) {
            $res['TodayTotal'] = $this->todayTotal;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Actioned'])) {
            $model->actioned = $map['Actioned'];
        }

        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }

        if (isset($map['Confirmed'])) {
            $model->confirmed = $map['Confirmed'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Fixed'])) {
            $model->fixed = $map['Fixed'];
        }

        if (isset($map['High'])) {
            $model->high = $map['High'];
        }

        if (isset($map['Ignore'])) {
            $model->ignore = $map['Ignore'];
        }

        if (isset($map['Low'])) {
            $model->low = $map['Low'];
        }

        if (isset($map['Medium'])) {
            $model->medium = $map['Medium'];
        }

        if (isset($map['ToBeConfirmed'])) {
            $model->toBeConfirmed = $map['ToBeConfirmed'];
        }

        if (isset($map['ToBeFixed'])) {
            $model->toBeFixed = $map['ToBeFixed'];
        }

        if (isset($map['TodayHigh'])) {
            $model->todayHigh = $map['TodayHigh'];
        }

        if (isset($map['TodayLow'])) {
            $model->todayLow = $map['TodayLow'];
        }

        if (isset($map['TodayMedium'])) {
            $model->todayMedium = $map['TodayMedium'];
        }

        if (isset($map['TodayTotal'])) {
            $model->todayTotal = $map['TodayTotal'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
