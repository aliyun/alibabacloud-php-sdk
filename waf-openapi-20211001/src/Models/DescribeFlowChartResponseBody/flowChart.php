<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowChartResponseBody;

use AlibabaCloud\Tea\Model;

class flowChart extends Model
{
    /**
     * @var int
     */
    public $aclCustomBlockSum;

    /**
     * @var int
     */
    public $aclCustomReportsSum;

    /**
     * @var int
     */
    public $antiScanBlockSum;

    /**
     * @var int
     */
    public $antibotBlockSum;

    /**
     * @var string
     */
    public $antibotReportSum;

    /**
     * @var int
     */
    public $antiscanReportsSum;

    /**
     * @var string
     */
    public $blacklistBlockSum;

    /**
     * @var int
     */
    public $blacklistReportsSum;

    /**
     * @var int
     */
    public $ccCustomBlockSum;

    /**
     * @var int
     */
    public $ccCustomReportsSum;

    /**
     * @var int
     */
    public $ccSystemBlocksSum;

    /**
     * @var int
     */
    public $ccSystemReportsSum;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $maxPv;

    /**
     * @var int
     */
    public $outBytes;

    /**
     * @var int
     */
    public $regionBlockBlocksSum;

    /**
     * @var int
     */
    public $regionBlockReportsSum;

    /**
     * @var int
     */
    public $wafBlockSum;

    /**
     * @var string
     */
    public $wafReportSum;
    protected $_name = [
        'aclCustomBlockSum'     => 'AclCustomBlockSum',
        'aclCustomReportsSum'   => 'AclCustomReportsSum',
        'antiScanBlockSum'      => 'AntiScanBlockSum',
        'antibotBlockSum'       => 'AntibotBlockSum',
        'antibotReportSum'      => 'AntibotReportSum',
        'antiscanReportsSum'    => 'AntiscanReportsSum',
        'blacklistBlockSum'     => 'BlacklistBlockSum',
        'blacklistReportsSum'   => 'BlacklistReportsSum',
        'ccCustomBlockSum'      => 'CcCustomBlockSum',
        'ccCustomReportsSum'    => 'CcCustomReportsSum',
        'ccSystemBlocksSum'     => 'CcSystemBlocksSum',
        'ccSystemReportsSum'    => 'CcSystemReportsSum',
        'count'                 => 'Count',
        'inBytes'               => 'InBytes',
        'index'                 => 'Index',
        'maxPv'                 => 'MaxPv',
        'outBytes'              => 'OutBytes',
        'regionBlockBlocksSum'  => 'RegionBlockBlocksSum',
        'regionBlockReportsSum' => 'RegionBlockReportsSum',
        'wafBlockSum'           => 'WafBlockSum',
        'wafReportSum'          => 'WafReportSum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclCustomBlockSum) {
            $res['AclCustomBlockSum'] = $this->aclCustomBlockSum;
        }
        if (null !== $this->aclCustomReportsSum) {
            $res['AclCustomReportsSum'] = $this->aclCustomReportsSum;
        }
        if (null !== $this->antiScanBlockSum) {
            $res['AntiScanBlockSum'] = $this->antiScanBlockSum;
        }
        if (null !== $this->antibotBlockSum) {
            $res['AntibotBlockSum'] = $this->antibotBlockSum;
        }
        if (null !== $this->antibotReportSum) {
            $res['AntibotReportSum'] = $this->antibotReportSum;
        }
        if (null !== $this->antiscanReportsSum) {
            $res['AntiscanReportsSum'] = $this->antiscanReportsSum;
        }
        if (null !== $this->blacklistBlockSum) {
            $res['BlacklistBlockSum'] = $this->blacklistBlockSum;
        }
        if (null !== $this->blacklistReportsSum) {
            $res['BlacklistReportsSum'] = $this->blacklistReportsSum;
        }
        if (null !== $this->ccCustomBlockSum) {
            $res['CcCustomBlockSum'] = $this->ccCustomBlockSum;
        }
        if (null !== $this->ccCustomReportsSum) {
            $res['CcCustomReportsSum'] = $this->ccCustomReportsSum;
        }
        if (null !== $this->ccSystemBlocksSum) {
            $res['CcSystemBlocksSum'] = $this->ccSystemBlocksSum;
        }
        if (null !== $this->ccSystemReportsSum) {
            $res['CcSystemReportsSum'] = $this->ccSystemReportsSum;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->maxPv) {
            $res['MaxPv'] = $this->maxPv;
        }
        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }
        if (null !== $this->regionBlockBlocksSum) {
            $res['RegionBlockBlocksSum'] = $this->regionBlockBlocksSum;
        }
        if (null !== $this->regionBlockReportsSum) {
            $res['RegionBlockReportsSum'] = $this->regionBlockReportsSum;
        }
        if (null !== $this->wafBlockSum) {
            $res['WafBlockSum'] = $this->wafBlockSum;
        }
        if (null !== $this->wafReportSum) {
            $res['WafReportSum'] = $this->wafReportSum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowChart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclCustomBlockSum'])) {
            $model->aclCustomBlockSum = $map['AclCustomBlockSum'];
        }
        if (isset($map['AclCustomReportsSum'])) {
            $model->aclCustomReportsSum = $map['AclCustomReportsSum'];
        }
        if (isset($map['AntiScanBlockSum'])) {
            $model->antiScanBlockSum = $map['AntiScanBlockSum'];
        }
        if (isset($map['AntibotBlockSum'])) {
            $model->antibotBlockSum = $map['AntibotBlockSum'];
        }
        if (isset($map['AntibotReportSum'])) {
            $model->antibotReportSum = $map['AntibotReportSum'];
        }
        if (isset($map['AntiscanReportsSum'])) {
            $model->antiscanReportsSum = $map['AntiscanReportsSum'];
        }
        if (isset($map['BlacklistBlockSum'])) {
            $model->blacklistBlockSum = $map['BlacklistBlockSum'];
        }
        if (isset($map['BlacklistReportsSum'])) {
            $model->blacklistReportsSum = $map['BlacklistReportsSum'];
        }
        if (isset($map['CcCustomBlockSum'])) {
            $model->ccCustomBlockSum = $map['CcCustomBlockSum'];
        }
        if (isset($map['CcCustomReportsSum'])) {
            $model->ccCustomReportsSum = $map['CcCustomReportsSum'];
        }
        if (isset($map['CcSystemBlocksSum'])) {
            $model->ccSystemBlocksSum = $map['CcSystemBlocksSum'];
        }
        if (isset($map['CcSystemReportsSum'])) {
            $model->ccSystemReportsSum = $map['CcSystemReportsSum'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['MaxPv'])) {
            $model->maxPv = $map['MaxPv'];
        }
        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }
        if (isset($map['RegionBlockBlocksSum'])) {
            $model->regionBlockBlocksSum = $map['RegionBlockBlocksSum'];
        }
        if (isset($map['RegionBlockReportsSum'])) {
            $model->regionBlockReportsSum = $map['RegionBlockReportsSum'];
        }
        if (isset($map['WafBlockSum'])) {
            $model->wafBlockSum = $map['WafBlockSum'];
        }
        if (isset($map['WafReportSum'])) {
            $model->wafReportSum = $map['WafReportSum'];
        }

        return $model;
    }
}
