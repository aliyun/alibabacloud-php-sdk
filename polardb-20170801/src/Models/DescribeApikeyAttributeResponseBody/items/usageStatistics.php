<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApikeyAttributeResponseBody\items;

use AlibabaCloud\Dara\Model;

class usageStatistics extends Model
{
    /**
     * @var string
     */
    public $dimensionRefId;

    /**
     * @var string
     */
    public $dimensionType;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $monthlyCacheToken;

    /**
     * @var string
     */
    public $monthlyCostPoints;

    /**
     * @var string
     */
    public $monthlyInputToken;

    /**
     * @var string
     */
    public $monthlyOutputToken;

    /**
     * @var string
     */
    public $monthlyToken;

    /**
     * @var string
     */
    public $totalCacheToken;

    /**
     * @var string
     */
    public $totalCostPoints;

    /**
     * @var string
     */
    public $totalInputToken;

    /**
     * @var string
     */
    public $totalOutputToken;

    /**
     * @var string
     */
    public $totalToken;
    protected $_name = [
        'dimensionRefId' => 'DimensionRefId',
        'dimensionType' => 'DimensionType',
        'gwClusterId' => 'GwClusterId',
        'monthlyCacheToken' => 'MonthlyCacheToken',
        'monthlyCostPoints' => 'MonthlyCostPoints',
        'monthlyInputToken' => 'MonthlyInputToken',
        'monthlyOutputToken' => 'MonthlyOutputToken',
        'monthlyToken' => 'MonthlyToken',
        'totalCacheToken' => 'TotalCacheToken',
        'totalCostPoints' => 'TotalCostPoints',
        'totalInputToken' => 'TotalInputToken',
        'totalOutputToken' => 'TotalOutputToken',
        'totalToken' => 'TotalToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimensionRefId) {
            $res['DimensionRefId'] = $this->dimensionRefId;
        }

        if (null !== $this->dimensionType) {
            $res['DimensionType'] = $this->dimensionType;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->monthlyCacheToken) {
            $res['MonthlyCacheToken'] = $this->monthlyCacheToken;
        }

        if (null !== $this->monthlyCostPoints) {
            $res['MonthlyCostPoints'] = $this->monthlyCostPoints;
        }

        if (null !== $this->monthlyInputToken) {
            $res['MonthlyInputToken'] = $this->monthlyInputToken;
        }

        if (null !== $this->monthlyOutputToken) {
            $res['MonthlyOutputToken'] = $this->monthlyOutputToken;
        }

        if (null !== $this->monthlyToken) {
            $res['MonthlyToken'] = $this->monthlyToken;
        }

        if (null !== $this->totalCacheToken) {
            $res['TotalCacheToken'] = $this->totalCacheToken;
        }

        if (null !== $this->totalCostPoints) {
            $res['TotalCostPoints'] = $this->totalCostPoints;
        }

        if (null !== $this->totalInputToken) {
            $res['TotalInputToken'] = $this->totalInputToken;
        }

        if (null !== $this->totalOutputToken) {
            $res['TotalOutputToken'] = $this->totalOutputToken;
        }

        if (null !== $this->totalToken) {
            $res['TotalToken'] = $this->totalToken;
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
        if (isset($map['DimensionRefId'])) {
            $model->dimensionRefId = $map['DimensionRefId'];
        }

        if (isset($map['DimensionType'])) {
            $model->dimensionType = $map['DimensionType'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['MonthlyCacheToken'])) {
            $model->monthlyCacheToken = $map['MonthlyCacheToken'];
        }

        if (isset($map['MonthlyCostPoints'])) {
            $model->monthlyCostPoints = $map['MonthlyCostPoints'];
        }

        if (isset($map['MonthlyInputToken'])) {
            $model->monthlyInputToken = $map['MonthlyInputToken'];
        }

        if (isset($map['MonthlyOutputToken'])) {
            $model->monthlyOutputToken = $map['MonthlyOutputToken'];
        }

        if (isset($map['MonthlyToken'])) {
            $model->monthlyToken = $map['MonthlyToken'];
        }

        if (isset($map['TotalCacheToken'])) {
            $model->totalCacheToken = $map['TotalCacheToken'];
        }

        if (isset($map['TotalCostPoints'])) {
            $model->totalCostPoints = $map['TotalCostPoints'];
        }

        if (isset($map['TotalInputToken'])) {
            $model->totalInputToken = $map['TotalInputToken'];
        }

        if (isset($map['TotalOutputToken'])) {
            $model->totalOutputToken = $map['TotalOutputToken'];
        }

        if (isset($map['TotalToken'])) {
            $model->totalToken = $map['TotalToken'];
        }

        return $model;
    }
}
