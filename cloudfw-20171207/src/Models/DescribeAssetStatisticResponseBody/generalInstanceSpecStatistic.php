<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponseBody\generalInstanceSpecStatistic\cfwGeneralInstanceRegionStatistic;

class generalInstanceSpecStatistic extends Model
{
    /**
     * @var cfwGeneralInstanceRegionStatistic[]
     */
    public $cfwGeneralInstanceRegionStatistic;

    /**
     * @var int
     */
    public $totalCfwGeneralInstanceCnt;

    /**
     * @var int
     */
    public $totalCfwGeneralInstanceUsedCnt;

    /**
     * @var int
     */
    public $totalGeneralInstanceUsedCnt;

    /**
     * @var int
     */
    public $totalNatGeneralInstanceCnt;

    /**
     * @var int
     */
    public $totalNatGeneralInstanceUsedCnt;

    /**
     * @var int
     */
    public $totalVfwGeneralInstanceUsedCnt;
    protected $_name = [
        'cfwGeneralInstanceRegionStatistic' => 'CfwGeneralInstanceRegionStatistic',
        'totalCfwGeneralInstanceCnt' => 'TotalCfwGeneralInstanceCnt',
        'totalCfwGeneralInstanceUsedCnt' => 'TotalCfwGeneralInstanceUsedCnt',
        'totalGeneralInstanceUsedCnt' => 'TotalGeneralInstanceUsedCnt',
        'totalNatGeneralInstanceCnt' => 'TotalNatGeneralInstanceCnt',
        'totalNatGeneralInstanceUsedCnt' => 'TotalNatGeneralInstanceUsedCnt',
        'totalVfwGeneralInstanceUsedCnt' => 'TotalVfwGeneralInstanceUsedCnt',
    ];

    public function validate()
    {
        if (\is_array($this->cfwGeneralInstanceRegionStatistic)) {
            Model::validateArray($this->cfwGeneralInstanceRegionStatistic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cfwGeneralInstanceRegionStatistic) {
            if (\is_array($this->cfwGeneralInstanceRegionStatistic)) {
                $res['CfwGeneralInstanceRegionStatistic'] = [];
                $n1 = 0;
                foreach ($this->cfwGeneralInstanceRegionStatistic as $item1) {
                    $res['CfwGeneralInstanceRegionStatistic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCfwGeneralInstanceCnt) {
            $res['TotalCfwGeneralInstanceCnt'] = $this->totalCfwGeneralInstanceCnt;
        }

        if (null !== $this->totalCfwGeneralInstanceUsedCnt) {
            $res['TotalCfwGeneralInstanceUsedCnt'] = $this->totalCfwGeneralInstanceUsedCnt;
        }

        if (null !== $this->totalGeneralInstanceUsedCnt) {
            $res['TotalGeneralInstanceUsedCnt'] = $this->totalGeneralInstanceUsedCnt;
        }

        if (null !== $this->totalNatGeneralInstanceCnt) {
            $res['TotalNatGeneralInstanceCnt'] = $this->totalNatGeneralInstanceCnt;
        }

        if (null !== $this->totalNatGeneralInstanceUsedCnt) {
            $res['TotalNatGeneralInstanceUsedCnt'] = $this->totalNatGeneralInstanceUsedCnt;
        }

        if (null !== $this->totalVfwGeneralInstanceUsedCnt) {
            $res['TotalVfwGeneralInstanceUsedCnt'] = $this->totalVfwGeneralInstanceUsedCnt;
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
        if (isset($map['CfwGeneralInstanceRegionStatistic'])) {
            if (!empty($map['CfwGeneralInstanceRegionStatistic'])) {
                $model->cfwGeneralInstanceRegionStatistic = [];
                $n1 = 0;
                foreach ($map['CfwGeneralInstanceRegionStatistic'] as $item1) {
                    $model->cfwGeneralInstanceRegionStatistic[$n1] = cfwGeneralInstanceRegionStatistic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCfwGeneralInstanceCnt'])) {
            $model->totalCfwGeneralInstanceCnt = $map['TotalCfwGeneralInstanceCnt'];
        }

        if (isset($map['TotalCfwGeneralInstanceUsedCnt'])) {
            $model->totalCfwGeneralInstanceUsedCnt = $map['TotalCfwGeneralInstanceUsedCnt'];
        }

        if (isset($map['TotalGeneralInstanceUsedCnt'])) {
            $model->totalGeneralInstanceUsedCnt = $map['TotalGeneralInstanceUsedCnt'];
        }

        if (isset($map['TotalNatGeneralInstanceCnt'])) {
            $model->totalNatGeneralInstanceCnt = $map['TotalNatGeneralInstanceCnt'];
        }

        if (isset($map['TotalNatGeneralInstanceUsedCnt'])) {
            $model->totalNatGeneralInstanceUsedCnt = $map['TotalNatGeneralInstanceUsedCnt'];
        }

        if (isset($map['TotalVfwGeneralInstanceUsedCnt'])) {
            $model->totalVfwGeneralInstanceUsedCnt = $map['TotalVfwGeneralInstanceUsedCnt'];
        }

        return $model;
    }
}
