<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class baselineResultSummary extends Model
{
    /**
     * @description The category of the baseline.
     *
     * @example Unauthorized access
     *
     * @var string
     */
    public $baselineClassAlias;

    /**
     * @description The keyword of the baseline category.
     *
     * @example hc_image_exploit
     *
     * @var string
     */
    public $baselineClassKey;

    /**
     * @description The name of the baseline.
     *
     * @example Unauthorized access
     *
     * @var string
     */
    public $baselineNameAlias;

    /**
     * @description The keyword of the baseline name.
     *
     * @example hc_image_exploit
     *
     * @var string
     */
    public $baselineNameKey;

    /**
     * @description The severity of the image baseline. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $baselineNameLevel;

    /**
     * @description The timestamp generated when the first scan was performed. Unit: milliseconds.
     *
     * @example 1626628760000
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @description The number of images on which **high** baseline risks are detected.
     *
     * @example 15
     *
     * @var int
     */
    public $highRiskImage;

    /**
     * @description The timestamp generated when the last scan was performed. Unit: milliseconds.
     *
     * @example 1626628760000
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The number of images on which **low** baseline risks are detected.
     *
     * @example 0
     *
     * @var int
     */
    public $lowRiskImage;

    /**
     * @description The number of images on which **medium** baseline risks are detected.
     *
     * @example 0
     *
     * @var int
     */
    public $middleRiskImage;

    /**
     * @description The status of the baseline risks. Valid values:
     *
     *   **0**: unfixed
     *   **1**: fixed
     *   **2**: pending verification
     *   **3**: fixing failed
     *
     * @example 0
     *
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
