<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class riskRankInfo extends Model
{
    /**
     * @var int
     */
    public $baseline;
    /**
     * @var int
     */
    public $scanTime;
    /**
     * @var int
     */
    public $scanTimeTimestamp;
    /**
     * @var int
     */
    public $totalScanned;
    /**
     * @var int
     */
    public $vulAsap;
    protected $_name = [
        'baseline'          => 'Baseline',
        'scanTime'          => 'ScanTime',
        'scanTimeTimestamp' => 'ScanTimeTimestamp',
        'totalScanned'      => 'TotalScanned',
        'vulAsap'           => 'VulAsap',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
