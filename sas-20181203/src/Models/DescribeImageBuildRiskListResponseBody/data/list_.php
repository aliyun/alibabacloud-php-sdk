<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBuildRiskListResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $firstScanTime;

    /**
     * @var int
     */
    public $lastScanTime;

    /**
     * @var string
     */
    public $riskClass;

    /**
     * @var string
     */
    public $riskClassName;

    /**
     * @var string
     */
    public $riskKey;

    /**
     * @var string
     */
    public $riskKeyName;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $unprocessedNum;
    protected $_name = [
        'count' => 'Count',
        'firstScanTime' => 'FirstScanTime',
        'lastScanTime' => 'LastScanTime',
        'riskClass' => 'RiskClass',
        'riskClassName' => 'RiskClassName',
        'riskKey' => 'RiskKey',
        'riskKeyName' => 'RiskKeyName',
        'riskLevel' => 'RiskLevel',
        'unprocessedNum' => 'UnprocessedNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }

        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }

        if (null !== $this->riskClass) {
            $res['RiskClass'] = $this->riskClass;
        }

        if (null !== $this->riskClassName) {
            $res['RiskClassName'] = $this->riskClassName;
        }

        if (null !== $this->riskKey) {
            $res['RiskKey'] = $this->riskKey;
        }

        if (null !== $this->riskKeyName) {
            $res['RiskKeyName'] = $this->riskKeyName;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->unprocessedNum) {
            $res['UnprocessedNum'] = $this->unprocessedNum;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }

        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }

        if (isset($map['RiskClass'])) {
            $model->riskClass = $map['RiskClass'];
        }

        if (isset($map['RiskClassName'])) {
            $model->riskClassName = $map['RiskClassName'];
        }

        if (isset($map['RiskKey'])) {
            $model->riskKey = $map['RiskKey'];
        }

        if (isset($map['RiskKeyName'])) {
            $model->riskKeyName = $map['RiskKeyName'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['UnprocessedNum'])) {
            $model->unprocessedNum = $map['UnprocessedNum'];
        }

        return $model;
    }
}
