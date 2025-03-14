<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBuildRiskListResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The number of affected images.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The timestamp generated when the first scan was performed. Unit: milliseconds.
     *
     * @example 1723710827000
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @description The timestamp generated when the last scan was performed. Unit: milliseconds.
     *
     * @example 1723710827999
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The type key of the risk.
     *
     * @example other
     *
     * @var string
     */
    public $riskClass;

    /**
     * @description The type name of the risk.
     *
     * @example other
     *
     * @var string
     */
    public $riskClassName;

    /**
     * @description The key of the risk. You can call the [DescribeImageBuildRiskList](~~~~) operation to obtain the value of **RiskKey**.
     *
     * @example no_user
     *
     * @var string
     */
    public $riskKey;

    /**
     * @description The rule name of the risk.
     *
     * @example no_user
     *
     * @var string
     */
    public $riskKeyName;

    /**
     * @description The risk level. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example medium
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The number of unprocessed images.
     *
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
