<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeRatePlanPriceResponseBody\priceModel\ratePlan;

use AlibabaCloud\Dara\Model;

class planPriceList extends Model
{
    /**
     * @var string
     */
    public $accelerateType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $coverages;

    /**
     * @var string
     */
    public $crossborderTraffic;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $dcdnPlan;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $edgeCompute;

    /**
     * @var string
     */
    public $edgeDdos4Layer;

    /**
     * @var string
     */
    public $edgeDdos4LayerIntl;

    /**
     * @var string
     */
    public $edgeDdos7Layer;

    /**
     * @var string
     */
    public $edgeDdosInstanceCn;

    /**
     * @var string
     */
    public $edgeDdosInstanceIntl;

    /**
     * @var string
     */
    public $edgeLb4Layer;

    /**
     * @var string
     */
    public $edgeLb4LayerIntl;

    /**
     * @var string
     */
    public $edgeLb7Layer;

    /**
     * @var string
     */
    public $edgeWaf;

    /**
     * @var string
     */
    public $edgeWafInstance;

    /**
     * @var string
     */
    public $layer4Traffic;

    /**
     * @var string
     */
    public $layer4TrafficIntl;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planStatus;

    /**
     * @var string
     */
    public $planTraffic;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var int
     */
    public $position;

    /**
     * @var float
     */
    public $price;

    /**
     * @var float
     */
    public $totalPrice;
    protected $_name = [
        'accelerateType' => 'AccelerateType',
        'chargeType' => 'ChargeType',
        'coverages' => 'Coverages',
        'crossborderTraffic' => 'CrossborderTraffic',
        'currency' => 'Currency',
        'dcdnPlan' => 'DcdnPlan',
        'discountPrice' => 'DiscountPrice',
        'edgeCompute' => 'EdgeCompute',
        'edgeDdos4Layer' => 'EdgeDdos4Layer',
        'edgeDdos4LayerIntl' => 'EdgeDdos4LayerIntl',
        'edgeDdos7Layer' => 'EdgeDdos7Layer',
        'edgeDdosInstanceCn' => 'EdgeDdosInstanceCn',
        'edgeDdosInstanceIntl' => 'EdgeDdosInstanceIntl',
        'edgeLb4Layer' => 'EdgeLb4Layer',
        'edgeLb4LayerIntl' => 'EdgeLb4LayerIntl',
        'edgeLb7Layer' => 'EdgeLb7Layer',
        'edgeWaf' => 'EdgeWaf',
        'edgeWafInstance' => 'EdgeWafInstance',
        'layer4Traffic' => 'Layer4Traffic',
        'layer4TrafficIntl' => 'Layer4TrafficIntl',
        'planName' => 'PlanName',
        'planStatus' => 'PlanStatus',
        'planTraffic' => 'PlanTraffic',
        'planType' => 'PlanType',
        'position' => 'Position',
        'price' => 'Price',
        'totalPrice' => 'TotalPrice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateType) {
            $res['AccelerateType'] = $this->accelerateType;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->coverages) {
            $res['Coverages'] = $this->coverages;
        }

        if (null !== $this->crossborderTraffic) {
            $res['CrossborderTraffic'] = $this->crossborderTraffic;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->dcdnPlan) {
            $res['DcdnPlan'] = $this->dcdnPlan;
        }

        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }

        if (null !== $this->edgeCompute) {
            $res['EdgeCompute'] = $this->edgeCompute;
        }

        if (null !== $this->edgeDdos4Layer) {
            $res['EdgeDdos4Layer'] = $this->edgeDdos4Layer;
        }

        if (null !== $this->edgeDdos4LayerIntl) {
            $res['EdgeDdos4LayerIntl'] = $this->edgeDdos4LayerIntl;
        }

        if (null !== $this->edgeDdos7Layer) {
            $res['EdgeDdos7Layer'] = $this->edgeDdos7Layer;
        }

        if (null !== $this->edgeDdosInstanceCn) {
            $res['EdgeDdosInstanceCn'] = $this->edgeDdosInstanceCn;
        }

        if (null !== $this->edgeDdosInstanceIntl) {
            $res['EdgeDdosInstanceIntl'] = $this->edgeDdosInstanceIntl;
        }

        if (null !== $this->edgeLb4Layer) {
            $res['EdgeLb4Layer'] = $this->edgeLb4Layer;
        }

        if (null !== $this->edgeLb4LayerIntl) {
            $res['EdgeLb4LayerIntl'] = $this->edgeLb4LayerIntl;
        }

        if (null !== $this->edgeLb7Layer) {
            $res['EdgeLb7Layer'] = $this->edgeLb7Layer;
        }

        if (null !== $this->edgeWaf) {
            $res['EdgeWaf'] = $this->edgeWaf;
        }

        if (null !== $this->edgeWafInstance) {
            $res['EdgeWafInstance'] = $this->edgeWafInstance;
        }

        if (null !== $this->layer4Traffic) {
            $res['Layer4Traffic'] = $this->layer4Traffic;
        }

        if (null !== $this->layer4TrafficIntl) {
            $res['Layer4TrafficIntl'] = $this->layer4TrafficIntl;
        }

        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }

        if (null !== $this->planStatus) {
            $res['PlanStatus'] = $this->planStatus;
        }

        if (null !== $this->planTraffic) {
            $res['PlanTraffic'] = $this->planTraffic;
        }

        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
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
        if (isset($map['AccelerateType'])) {
            $model->accelerateType = $map['AccelerateType'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Coverages'])) {
            $model->coverages = $map['Coverages'];
        }

        if (isset($map['CrossborderTraffic'])) {
            $model->crossborderTraffic = $map['CrossborderTraffic'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['DcdnPlan'])) {
            $model->dcdnPlan = $map['DcdnPlan'];
        }

        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }

        if (isset($map['EdgeCompute'])) {
            $model->edgeCompute = $map['EdgeCompute'];
        }

        if (isset($map['EdgeDdos4Layer'])) {
            $model->edgeDdos4Layer = $map['EdgeDdos4Layer'];
        }

        if (isset($map['EdgeDdos4LayerIntl'])) {
            $model->edgeDdos4LayerIntl = $map['EdgeDdos4LayerIntl'];
        }

        if (isset($map['EdgeDdos7Layer'])) {
            $model->edgeDdos7Layer = $map['EdgeDdos7Layer'];
        }

        if (isset($map['EdgeDdosInstanceCn'])) {
            $model->edgeDdosInstanceCn = $map['EdgeDdosInstanceCn'];
        }

        if (isset($map['EdgeDdosInstanceIntl'])) {
            $model->edgeDdosInstanceIntl = $map['EdgeDdosInstanceIntl'];
        }

        if (isset($map['EdgeLb4Layer'])) {
            $model->edgeLb4Layer = $map['EdgeLb4Layer'];
        }

        if (isset($map['EdgeLb4LayerIntl'])) {
            $model->edgeLb4LayerIntl = $map['EdgeLb4LayerIntl'];
        }

        if (isset($map['EdgeLb7Layer'])) {
            $model->edgeLb7Layer = $map['EdgeLb7Layer'];
        }

        if (isset($map['EdgeWaf'])) {
            $model->edgeWaf = $map['EdgeWaf'];
        }

        if (isset($map['EdgeWafInstance'])) {
            $model->edgeWafInstance = $map['EdgeWafInstance'];
        }

        if (isset($map['Layer4Traffic'])) {
            $model->layer4Traffic = $map['Layer4Traffic'];
        }

        if (isset($map['Layer4TrafficIntl'])) {
            $model->layer4TrafficIntl = $map['Layer4TrafficIntl'];
        }

        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        if (isset($map['PlanStatus'])) {
            $model->planStatus = $map['PlanStatus'];
        }

        if (isset($map['PlanTraffic'])) {
            $model->planTraffic = $map['PlanTraffic'];
        }

        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }

        return $model;
    }
}
