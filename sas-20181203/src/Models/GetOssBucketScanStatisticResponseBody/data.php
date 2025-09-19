<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOssBucketScanStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $highRisk;

    /**
     * @var int
     */
    public $lowRisk;

    /**
     * @var int
     */
    public $mediumRisk;

    /**
     * @var int
     */
    public $noScanBucket;

    /**
     * @var int
     */
    public $remainAuth;

    /**
     * @var int
     */
    public $riskBucket;

    /**
     * @var int
     */
    public $scanObject;

    /**
     * @var int
     */
    public $totalBucket;

    /**
     * @var int
     */
    public $totalObject;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'highRisk' => 'HighRisk',
        'lowRisk' => 'LowRisk',
        'mediumRisk' => 'MediumRisk',
        'noScanBucket' => 'NoScanBucket',
        'remainAuth' => 'RemainAuth',
        'riskBucket' => 'RiskBucket',
        'scanObject' => 'ScanObject',
        'totalBucket' => 'TotalBucket',
        'totalObject' => 'TotalObject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
