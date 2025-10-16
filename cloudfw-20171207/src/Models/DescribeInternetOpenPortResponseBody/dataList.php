<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetOpenPortResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $detailNum;

    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var int
     */
    public $outBytes;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $probRisk;

    /**
     * @var string
     */
    public $probRiskDesc;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $publicIpNum;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskReason;

    /**
     * @var string[]
     */
    public $serviceNameList;

    /**
     * @var int
     */
    public $suggestLevel;

    /**
     * @var int
     */
    public $totalBytes;

    /**
     * @var string
     */
    public $trafficPercent1Day;

    /**
     * @var string
     */
    public $trafficPercent30Day;

    /**
     * @var string
     */
    public $trafficPercent7Day;

    /**
     * @var string[]
     */
    public $unknownReason;
    protected $_name = [
        'detailNum' => 'DetailNum',
        'inBytes' => 'InBytes',
        'outBytes' => 'OutBytes',
        'port' => 'Port',
        'probRisk' => 'ProbRisk',
        'probRiskDesc' => 'ProbRiskDesc',
        'protocol' => 'Protocol',
        'publicIpNum' => 'PublicIpNum',
        'riskLevel' => 'RiskLevel',
        'riskReason' => 'RiskReason',
        'serviceNameList' => 'ServiceNameList',
        'suggestLevel' => 'SuggestLevel',
        'totalBytes' => 'TotalBytes',
        'trafficPercent1Day' => 'TrafficPercent1Day',
        'trafficPercent30Day' => 'TrafficPercent30Day',
        'trafficPercent7Day' => 'TrafficPercent7Day',
        'unknownReason' => 'UnknownReason',
    ];

    public function validate()
    {
        if (\is_array($this->serviceNameList)) {
            Model::validateArray($this->serviceNameList);
        }
        if (\is_array($this->unknownReason)) {
            Model::validateArray($this->unknownReason);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailNum) {
            $res['DetailNum'] = $this->detailNum;
        }

        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->probRisk) {
            $res['ProbRisk'] = $this->probRisk;
        }

        if (null !== $this->probRiskDesc) {
            $res['ProbRiskDesc'] = $this->probRiskDesc;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->publicIpNum) {
            $res['PublicIpNum'] = $this->publicIpNum;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->riskReason) {
            $res['RiskReason'] = $this->riskReason;
        }

        if (null !== $this->serviceNameList) {
            if (\is_array($this->serviceNameList)) {
                $res['ServiceNameList'] = [];
                $n1 = 0;
                foreach ($this->serviceNameList as $item1) {
                    $res['ServiceNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suggestLevel) {
            $res['SuggestLevel'] = $this->suggestLevel;
        }

        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }

        if (null !== $this->trafficPercent1Day) {
            $res['TrafficPercent1Day'] = $this->trafficPercent1Day;
        }

        if (null !== $this->trafficPercent30Day) {
            $res['TrafficPercent30Day'] = $this->trafficPercent30Day;
        }

        if (null !== $this->trafficPercent7Day) {
            $res['TrafficPercent7Day'] = $this->trafficPercent7Day;
        }

        if (null !== $this->unknownReason) {
            if (\is_array($this->unknownReason)) {
                $res['UnknownReason'] = [];
                $n1 = 0;
                foreach ($this->unknownReason as $item1) {
                    $res['UnknownReason'][$n1] = $item1;
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
        if (isset($map['DetailNum'])) {
            $model->detailNum = $map['DetailNum'];
        }

        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['ProbRisk'])) {
            $model->probRisk = $map['ProbRisk'];
        }

        if (isset($map['ProbRiskDesc'])) {
            $model->probRiskDesc = $map['ProbRiskDesc'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['PublicIpNum'])) {
            $model->publicIpNum = $map['PublicIpNum'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RiskReason'])) {
            $model->riskReason = $map['RiskReason'];
        }

        if (isset($map['ServiceNameList'])) {
            if (!empty($map['ServiceNameList'])) {
                $model->serviceNameList = [];
                $n1 = 0;
                foreach ($map['ServiceNameList'] as $item1) {
                    $model->serviceNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SuggestLevel'])) {
            $model->suggestLevel = $map['SuggestLevel'];
        }

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        if (isset($map['TrafficPercent1Day'])) {
            $model->trafficPercent1Day = $map['TrafficPercent1Day'];
        }

        if (isset($map['TrafficPercent30Day'])) {
            $model->trafficPercent30Day = $map['TrafficPercent30Day'];
        }

        if (isset($map['TrafficPercent7Day'])) {
            $model->trafficPercent7Day = $map['TrafficPercent7Day'];
        }

        if (isset($map['UnknownReason'])) {
            if (!empty($map['UnknownReason'])) {
                $model->unknownReason = [];
                $n1 = 0;
                foreach ($map['UnknownReason'] as $item1) {
                    $model->unknownReason[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
