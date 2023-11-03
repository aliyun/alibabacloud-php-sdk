<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOssBucketScanStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1714442403000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $highRisk;

    /**
     * @example 0
     *
     * @var int
     */
    public $lowRisk;

    /**
     * @example 0
     *
     * @var int
     */
    public $mediumRisk;

    /**
     * @example 1
     *
     * @var int
     */
    public $noScanBucket;

    /**
     * @example 1
     *
     * @var int
     */
    public $remainAuth;

    /**
     * @example 1
     *
     * @var int
     */
    public $riskBucket;

    /**
     * @example 1
     *
     * @var int
     */
    public $scanObject;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalBucket;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalObject;
    protected $_name = [
        'expireTime'   => 'ExpireTime',
        'highRisk'     => 'HighRisk',
        'lowRisk'      => 'LowRisk',
        'mediumRisk'   => 'MediumRisk',
        'noScanBucket' => 'NoScanBucket',
        'remainAuth'   => 'RemainAuth',
        'riskBucket'   => 'RiskBucket',
        'scanObject'   => 'ScanObject',
        'totalBucket'  => 'TotalBucket',
        'totalObject'  => 'TotalObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->highRisk) {
            $res['HighRisk'] = $this->highRisk;
        }
        if (null !== $this->lowRisk) {
            $res['LowRisk'] = $this->lowRisk;
        }
        if (null !== $this->mediumRisk) {
            $res['MediumRisk'] = $this->mediumRisk;
        }
        if (null !== $this->noScanBucket) {
            $res['NoScanBucket'] = $this->noScanBucket;
        }
        if (null !== $this->remainAuth) {
            $res['RemainAuth'] = $this->remainAuth;
        }
        if (null !== $this->riskBucket) {
            $res['RiskBucket'] = $this->riskBucket;
        }
        if (null !== $this->scanObject) {
            $res['ScanObject'] = $this->scanObject;
        }
        if (null !== $this->totalBucket) {
            $res['TotalBucket'] = $this->totalBucket;
        }
        if (null !== $this->totalObject) {
            $res['TotalObject'] = $this->totalObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['HighRisk'])) {
            $model->highRisk = $map['HighRisk'];
        }
        if (isset($map['LowRisk'])) {
            $model->lowRisk = $map['LowRisk'];
        }
        if (isset($map['MediumRisk'])) {
            $model->mediumRisk = $map['MediumRisk'];
        }
        if (isset($map['NoScanBucket'])) {
            $model->noScanBucket = $map['NoScanBucket'];
        }
        if (isset($map['RemainAuth'])) {
            $model->remainAuth = $map['RemainAuth'];
        }
        if (isset($map['RiskBucket'])) {
            $model->riskBucket = $map['RiskBucket'];
        }
        if (isset($map['ScanObject'])) {
            $model->scanObject = $map['ScanObject'];
        }
        if (isset($map['TotalBucket'])) {
            $model->totalBucket = $map['TotalBucket'];
        }
        if (isset($map['TotalObject'])) {
            $model->totalObject = $map['TotalObject'];
        }

        return $model;
    }
}
