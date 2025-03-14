<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class riskRankInfo extends Model
{
    /**
     * @description Number of baseline issue risks.
     *
     * @example 1
     *
     * @var int
     */
    public $baseline;

    /**
     * @description Scan timestamp.
     *
     * @example 1693997625000
     *
     * @var int
     */
    public $scanTime;

    /**
     * @description Scan timestamp.
     *
     * @example 1693997625000
     *
     * @var int
     */
    public $scanTimeTimestamp;

    /**
     * @description Count of scanned Dockerhub images.
     *
     * @example 1
     *
     * @var int
     */
    public $totalScanned;

    /**
     * @description Number of high-risk vulnerabilities.
     *
     * @example 1
     *
     * @var int
     */
    public $vulAsap;
    protected $_name = [
        'baseline' => 'Baseline',
        'scanTime' => 'ScanTime',
        'scanTimeTimestamp' => 'ScanTimeTimestamp',
        'totalScanned' => 'TotalScanned',
        'vulAsap' => 'VulAsap',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseline) {
            $res['Baseline'] = $this->baseline;
        }
        if (null !== $this->scanTime) {
            $res['ScanTime'] = $this->scanTime;
        }
        if (null !== $this->scanTimeTimestamp) {
            $res['ScanTimeTimestamp'] = $this->scanTimeTimestamp;
        }
        if (null !== $this->totalScanned) {
            $res['TotalScanned'] = $this->totalScanned;
        }
        if (null !== $this->vulAsap) {
            $res['VulAsap'] = $this->vulAsap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskRankInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Baseline'])) {
            $model->baseline = $map['Baseline'];
        }
        if (isset($map['ScanTime'])) {
            $model->scanTime = $map['ScanTime'];
        }
        if (isset($map['ScanTimeTimestamp'])) {
            $model->scanTimeTimestamp = $map['ScanTimeTimestamp'];
        }
        if (isset($map['TotalScanned'])) {
            $model->totalScanned = $map['TotalScanned'];
        }
        if (isset($map['VulAsap'])) {
            $model->vulAsap = $map['VulAsap'];
        }

        return $model;
    }
}
