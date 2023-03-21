<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckResultResponseBody;

use AlibabaCloud\Tea\Model;

class baselineResult extends Model
{
    /**
     * @var string
     */
    public $baselineClassAlias;

    /**
     * @var int
     */
    public $baselineItemCount;

    /**
     * @var string
     */
    public $baselineNameAlias;

    /**
     * @var string
     */
    public $baselineNameKey;

    /**
     * @var string
     */
    public $baselineNameLevel;

    /**
     * @var int
     */
    public $firstScanTime;

    /**
     * @var int
     */
    public $highRiskItemCount;

    /**
     * @var int
     */
    public $lastScanTime;

    /**
     * @var int
     */
    public $lowRiskItemCount;

    /**
     * @var int
     */
    public $middleRiskItemCount;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'baselineClassAlias'  => 'BaselineClassAlias',
        'baselineItemCount'   => 'BaselineItemCount',
        'baselineNameAlias'   => 'BaselineNameAlias',
        'baselineNameKey'     => 'BaselineNameKey',
        'baselineNameLevel'   => 'BaselineNameLevel',
        'firstScanTime'       => 'FirstScanTime',
        'highRiskItemCount'   => 'HighRiskItemCount',
        'lastScanTime'        => 'LastScanTime',
        'lowRiskItemCount'    => 'LowRiskItemCount',
        'middleRiskItemCount' => 'MiddleRiskItemCount',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineClassAlias) {
            $res['BaselineClassAlias'] = $this->baselineClassAlias;
        }
        if (null !== $this->baselineItemCount) {
            $res['BaselineItemCount'] = $this->baselineItemCount;
        }
        if (null !== $this->baselineNameAlias) {
            $res['BaselineNameAlias'] = $this->baselineNameAlias;
        }
        if (null !== $this->baselineNameKey) {
            $res['BaselineNameKey'] = $this->baselineNameKey;
        }
        if (null !== $this->baselineNameLevel) {
            $res['BaselineNameLevel'] = $this->baselineNameLevel;
        }
        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }
        if (null !== $this->highRiskItemCount) {
            $res['HighRiskItemCount'] = $this->highRiskItemCount;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->lowRiskItemCount) {
            $res['LowRiskItemCount'] = $this->lowRiskItemCount;
        }
        if (null !== $this->middleRiskItemCount) {
            $res['MiddleRiskItemCount'] = $this->middleRiskItemCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineClassAlias'])) {
            $model->baselineClassAlias = $map['BaselineClassAlias'];
        }
        if (isset($map['BaselineItemCount'])) {
            $model->baselineItemCount = $map['BaselineItemCount'];
        }
        if (isset($map['BaselineNameAlias'])) {
            $model->baselineNameAlias = $map['BaselineNameAlias'];
        }
        if (isset($map['BaselineNameKey'])) {
            $model->baselineNameKey = $map['BaselineNameKey'];
        }
        if (isset($map['BaselineNameLevel'])) {
            $model->baselineNameLevel = $map['BaselineNameLevel'];
        }
        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }
        if (isset($map['HighRiskItemCount'])) {
            $model->highRiskItemCount = $map['HighRiskItemCount'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['LowRiskItemCount'])) {
            $model->lowRiskItemCount = $map['LowRiskItemCount'];
        }
        if (isset($map['MiddleRiskItemCount'])) {
            $model->middleRiskItemCount = $map['MiddleRiskItemCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
