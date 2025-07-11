<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowChartResponseBody;

use AlibabaCloud\Tea\Model;

class flowChart extends Model
{
    /**
     * @description The number of requests that are blocked by custom access control list (ACL) rules.
     *
     * @example 0
     *
     * @var int
     */
    public $aclCustomBlockSum;

    /**
     * @description The number of requests that are monitored by custom ACL rules.
     *
     * @example 0
     *
     * @var int
     */
    public $aclCustomReportsSum;

    /**
     * @description The number of requests that are blocked by scan protection rules.
     *
     * @example 0
     *
     * @var int
     */
    public $antiScanBlockSum;

    /**
     * @description The number of requests that are blocked by bot management rules.
     *
     * @example 0
     *
     * @var int
     */
    public $antibotBlockSum;

    /**
     * @description The number of requests that are monitored by bot management rules.
     *
     * @example 0
     *
     * @var string
     */
    public $antibotReportSum;

    /**
     * @description The number of requests that are monitored by scan protection rules.
     *
     * @example 0
     *
     * @var int
     */
    public $antiscanReportsSum;

    /**
     * @description The number of requests that are blocked by the IP address blacklist.
     *
     * @example 0
     *
     * @var string
     */
    public $blacklistBlockSum;

    /**
     * @description The number of requests that are monitored by the IP address blacklist.
     *
     * @example 0
     *
     * @var int
     */
    public $blacklistReportsSum;

    /**
     * @description The number of requests that are blocked by custom HTTP flood protection rules.
     *
     * @example 0
     *
     * @var int
     */
    public $ccCustomBlockSum;

    /**
     * @description The number of requests that are monitored by custom HTTP flood protection rules.
     *
     * @example 0
     *
     * @var int
     */
    public $ccCustomReportsSum;

    /**
     * @description The number of requests that are blocked by HTTP flood protection rules created by the system.
     *
     * @example 0
     *
     * @var int
     */
    public $ccSystemBlocksSum;

    /**
     * @description The number of requests that are monitored by HTTP flood protection rules created by the system.
     *
     * @example 0
     *
     * @var int
     */
    public $ccSystemReportsSum;

    /**
     * @description The total number of requests.
     *
     * @example 2932
     *
     * @var int
     */
    public $count;

    /**
     * @description The total number of requests that are redirected to the WAF instance.
     *
     * @example 121645464
     *
     * @var int
     */
    public $inBytes;

    /**
     * @description The serial number of the time interval. The serial numbers are arranged in chronological order.
     *
     * @example 10
     *
     * @var int
     */
    public $index;

    /**
     * @description The peak traffic.
     *
     * @example 2932
     *
     * @var int
     */
    public $maxPv;

    /**
     * @description The total number of requests that are forwarded by the WAF instance.
     *
     * @example 1200540464
     *
     * @var int
     */
    public $outBytes;

    /**
     * @description The number of requests that are blocked by rate limiting rules.
     *
     * @example 0
     *
     * @var int
     */
    public $ratelimitBlockSum;

    /**
     * @description The number of requests that are monitored by rate limiting rules.
     *
     * @example 0
     *
     * @var int
     */
    public $ratelimitReportSum;

    /**
     * @description The number of requests that are blocked by region blacklist rules.
     *
     * @example 0
     *
     * @var int
     */
    public $regionBlockBlocksSum;

    /**
     * @description The number of requests that are monitored by region blacklist rules.
     *
     * @example 0
     *
     * @var int
     */
    public $regionBlockReportsSum;

    /**
     * @description The total number of bot requests.
     *
     * @example 1110
     *
     * @var int
     */
    public $robotCount;

    /**
     * @description The number of requests that are blocked by basic protection rules.
     *
     * @example 0
     *
     * @var int
     */
    public $wafBlockSum;

    /**
     * @description The number of requests that are monitored by basic protection rules.
     *
     * @example 0
     *
     * @var string
     */
    public $wafReportSum;
    protected $_name = [
        'aclCustomBlockSum' => 'AclCustomBlockSum',
        'aclCustomReportsSum' => 'AclCustomReportsSum',
        'antiScanBlockSum' => 'AntiScanBlockSum',
        'antibotBlockSum' => 'AntibotBlockSum',
        'antibotReportSum' => 'AntibotReportSum',
        'antiscanReportsSum' => 'AntiscanReportsSum',
        'blacklistBlockSum' => 'BlacklistBlockSum',
        'blacklistReportsSum' => 'BlacklistReportsSum',
        'ccCustomBlockSum' => 'CcCustomBlockSum',
        'ccCustomReportsSum' => 'CcCustomReportsSum',
        'ccSystemBlocksSum' => 'CcSystemBlocksSum',
        'ccSystemReportsSum' => 'CcSystemReportsSum',
        'count' => 'Count',
        'inBytes' => 'InBytes',
        'index' => 'Index',
        'maxPv' => 'MaxPv',
        'outBytes' => 'OutBytes',
        'ratelimitBlockSum' => 'RatelimitBlockSum',
        'ratelimitReportSum' => 'RatelimitReportSum',
        'regionBlockBlocksSum' => 'RegionBlockBlocksSum',
        'regionBlockReportsSum' => 'RegionBlockReportsSum',
        'robotCount' => 'RobotCount',
        'wafBlockSum' => 'WafBlockSum',
        'wafReportSum' => 'WafReportSum',
    ];

    public function validate() {}

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
        if (null !== $this->ratelimitBlockSum) {
            $res['RatelimitBlockSum'] = $this->ratelimitBlockSum;
        }
        if (null !== $this->ratelimitReportSum) {
            $res['RatelimitReportSum'] = $this->ratelimitReportSum;
        }
        if (null !== $this->regionBlockBlocksSum) {
            $res['RegionBlockBlocksSum'] = $this->regionBlockBlocksSum;
        }
        if (null !== $this->regionBlockReportsSum) {
            $res['RegionBlockReportsSum'] = $this->regionBlockReportsSum;
        }
        if (null !== $this->robotCount) {
            $res['RobotCount'] = $this->robotCount;
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
        if (isset($map['RatelimitBlockSum'])) {
            $model->ratelimitBlockSum = $map['RatelimitBlockSum'];
        }
        if (isset($map['RatelimitReportSum'])) {
            $model->ratelimitReportSum = $map['RatelimitReportSum'];
        }
        if (isset($map['RegionBlockBlocksSum'])) {
            $model->regionBlockBlocksSum = $map['RegionBlockBlocksSum'];
        }
        if (isset($map['RegionBlockReportsSum'])) {
            $model->regionBlockReportsSum = $map['RegionBlockReportsSum'];
        }
        if (isset($map['RobotCount'])) {
            $model->robotCount = $map['RobotCount'];
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
