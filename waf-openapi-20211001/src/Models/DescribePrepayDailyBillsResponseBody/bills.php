<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePrepayDailyBillsResponseBody;

use AlibabaCloud\Dara\Model;

class bills extends Model
{
    /**
     * @var int
     */
    public $elasticQpsSetValue;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $exceedStatus;

    /**
     * @var int
     */
    public $maxQps;

    /**
     * @var float
     */
    public $price;

    /**
     * @var int
     */
    public $qps;

    /**
     * @var int
     */
    public $qpsVersion;

    /**
     * @var bool
     */
    public $riskControl;

    /**
     * @var int
     */
    public $riskTraffic;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string[]
     */
    public $type;
    protected $_name = [
        'elasticQpsSetValue' => 'ElasticQpsSetValue',
        'endTime' => 'EndTime',
        'exceedStatus' => 'ExceedStatus',
        'maxQps' => 'MaxQps',
        'price' => 'Price',
        'qps' => 'Qps',
        'qpsVersion' => 'QpsVersion',
        'riskControl' => 'RiskControl',
        'riskTraffic' => 'RiskTraffic',
        'startTime' => 'StartTime',
        'total' => 'Total',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->type)) {
            Model::validateArray($this->type);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticQpsSetValue) {
            $res['ElasticQpsSetValue'] = $this->elasticQpsSetValue;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->exceedStatus) {
            $res['ExceedStatus'] = $this->exceedStatus;
        }

        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }

        if (null !== $this->qpsVersion) {
            $res['QpsVersion'] = $this->qpsVersion;
        }

        if (null !== $this->riskControl) {
            $res['RiskControl'] = $this->riskControl;
        }

        if (null !== $this->riskTraffic) {
            $res['RiskTraffic'] = $this->riskTraffic;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->type) {
            if (\is_array($this->type)) {
                $res['Type'] = [];
                $n1 = 0;
                foreach ($this->type as $item1) {
                    $res['Type'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ElasticQpsSetValue'])) {
            $model->elasticQpsSetValue = $map['ElasticQpsSetValue'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExceedStatus'])) {
            $model->exceedStatus = $map['ExceedStatus'];
        }

        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }

        if (isset($map['QpsVersion'])) {
            $model->qpsVersion = $map['QpsVersion'];
        }

        if (isset($map['RiskControl'])) {
            $model->riskControl = $map['RiskControl'];
        }

        if (isset($map['RiskTraffic'])) {
            $model->riskTraffic = $map['RiskTraffic'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['Type'])) {
            if (!empty($map['Type'])) {
                $model->type = [];
                $n1 = 0;
                foreach ($map['Type'] as $item1) {
                    $model->type[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
