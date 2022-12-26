<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class baselineResultSummary extends Model
{
    /**
     * @var string
     */
    public $baselineClassAlias;

    /**
     * @var string
     */
    public $baselineClassKey;

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
    public $highRiskImage;

    /**
     * @var int
     */
    public $lastScanTime;

    /**
     * @var int
     */
    public $lowRiskImage;

    /**
     * @var int
     */
    public $middleRiskImage;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'baselineClassAlias' => 'BaselineClassAlias',
        'baselineClassKey'   => 'BaselineClassKey',
        'baselineNameAlias'  => 'BaselineNameAlias',
        'baselineNameKey'    => 'BaselineNameKey',
        'baselineNameLevel'  => 'BaselineNameLevel',
        'firstScanTime'      => 'FirstScanTime',
        'highRiskImage'      => 'HighRiskImage',
        'lastScanTime'       => 'LastScanTime',
        'lowRiskImage'       => 'LowRiskImage',
        'middleRiskImage'    => 'MiddleRiskImage',
        'status'             => 'Status',
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
        if (null !== $this->baselineClassKey) {
            $res['BaselineClassKey'] = $this->baselineClassKey;
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
        if (null !== $this->highRiskImage) {
            $res['HighRiskImage'] = $this->highRiskImage;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->lowRiskImage) {
            $res['LowRiskImage'] = $this->lowRiskImage;
        }
        if (null !== $this->middleRiskImage) {
            $res['MiddleRiskImage'] = $this->middleRiskImage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineResultSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineClassAlias'])) {
            $model->baselineClassAlias = $map['BaselineClassAlias'];
        }
        if (isset($map['BaselineClassKey'])) {
            $model->baselineClassKey = $map['BaselineClassKey'];
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
        if (isset($map['HighRiskImage'])) {
            $model->highRiskImage = $map['HighRiskImage'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['LowRiskImage'])) {
            $model->lowRiskImage = $map['LowRiskImage'];
        }
        if (isset($map['MiddleRiskImage'])) {
            $model->middleRiskImage = $map['MiddleRiskImage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
