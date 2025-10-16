<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeVpcFirewallSummaryInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $availableVpcFirewallQuota;

    /**
     * @var int
     */
    public $cenExpressConnectVpcCount;

    /**
     * @var int
     */
    public $cenFirewallVpcCount;

    /**
     * @var int
     */
    public $cenTrVpcCount;

    /**
     * @var int
     */
    public $closedCenFirewallCount;

    /**
     * @var int
     */
    public $closedExpressConnectFirewallCount;

    /**
     * @var int
     */
    public $closedVpcFirewallCount;

    /**
     * @var int
     */
    public $configuredCenFirewallCount;

    /**
     * @var int
     */
    public $configuredCenFirewallRegionCount;

    /**
     * @var int
     */
    public $configuredCenFirewallVpcCount;

    /**
     * @var int
     */
    public $configuredCenTrFirewallCount;

    /**
     * @var int
     */
    public $configuredExpressConnectFirewallCount;

    /**
     * @var int
     */
    public $configuredExpressConnectVpcCount;

    /**
     * @var int
     */
    public $configuredVpcFirewallCount;

    /**
     * @var int
     */
    public $configuredVpcFirewallVpcCount;

    /**
     * @var int
     */
    public $expressConnectVpcCount;

    /**
     * @var int
     */
    public $notConfiguredCenFirewallCount;

    /**
     * @var int
     */
    public $notConfiguredCenTrFirewallCount;

    /**
     * @var int
     */
    public $notConfiguredExpressConnectFirewallCount;

    /**
     * @var int
     */
    public $notConfiguredVpcFirewallCount;

    /**
     * @var int
     */
    public $openedCenExpressConnectVpcCount;

    /**
     * @var int
     */
    public $openedCenFirewallCount;

    /**
     * @var int
     */
    public $openedCenFirewallVpcCount;

    /**
     * @var int
     */
    public $openedCenTrFirewallVpcCount;

    /**
     * @var int
     */
    public $openedEcrCount;

    /**
     * @var int
     */
    public $openedExpressConnectFirewallCount;

    /**
     * @var int
     */
    public $openedExpressConnectVpcCount;

    /**
     * @var int
     */
    public $openedPeerTrCount;

    /**
     * @var int
     */
    public $openedVbrCount;

    /**
     * @var int
     */
    public $openedVpcCount;

    /**
     * @var int
     */
    public $openedVpcFirewallCount;

    /**
     * @var int
     */
    public $openedVpnCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalEcrCount;

    /**
     * @var int
     */
    public $totalPeerTrCount;

    /**
     * @var int
     */
    public $totalVbrCount;

    /**
     * @var int
     */
    public $totalVpcCount;

    /**
     * @var int
     */
    public $totalVpcFirewallQuota;

    /**
     * @var int
     */
    public $totalVpnCount;
    protected $_name = [
        'availableVpcFirewallQuota' => 'AvailableVpcFirewallQuota',
        'cenExpressConnectVpcCount' => 'CenExpressConnectVpcCount',
        'cenFirewallVpcCount' => 'CenFirewallVpcCount',
        'cenTrVpcCount' => 'CenTrVpcCount',
        'closedCenFirewallCount' => 'ClosedCenFirewallCount',
        'closedExpressConnectFirewallCount' => 'ClosedExpressConnectFirewallCount',
        'closedVpcFirewallCount' => 'ClosedVpcFirewallCount',
        'configuredCenFirewallCount' => 'ConfiguredCenFirewallCount',
        'configuredCenFirewallRegionCount' => 'ConfiguredCenFirewallRegionCount',
        'configuredCenFirewallVpcCount' => 'ConfiguredCenFirewallVpcCount',
        'configuredCenTrFirewallCount' => 'ConfiguredCenTrFirewallCount',
        'configuredExpressConnectFirewallCount' => 'ConfiguredExpressConnectFirewallCount',
        'configuredExpressConnectVpcCount' => 'ConfiguredExpressConnectVpcCount',
        'configuredVpcFirewallCount' => 'ConfiguredVpcFirewallCount',
        'configuredVpcFirewallVpcCount' => 'ConfiguredVpcFirewallVpcCount',
        'expressConnectVpcCount' => 'ExpressConnectVpcCount',
        'notConfiguredCenFirewallCount' => 'NotConfiguredCenFirewallCount',
        'notConfiguredCenTrFirewallCount' => 'NotConfiguredCenTrFirewallCount',
        'notConfiguredExpressConnectFirewallCount' => 'NotConfiguredExpressConnectFirewallCount',
        'notConfiguredVpcFirewallCount' => 'NotConfiguredVpcFirewallCount',
        'openedCenExpressConnectVpcCount' => 'OpenedCenExpressConnectVpcCount',
        'openedCenFirewallCount' => 'OpenedCenFirewallCount',
        'openedCenFirewallVpcCount' => 'OpenedCenFirewallVpcCount',
        'openedCenTrFirewallVpcCount' => 'OpenedCenTrFirewallVpcCount',
        'openedEcrCount' => 'OpenedEcrCount',
        'openedExpressConnectFirewallCount' => 'OpenedExpressConnectFirewallCount',
        'openedExpressConnectVpcCount' => 'OpenedExpressConnectVpcCount',
        'openedPeerTrCount' => 'OpenedPeerTrCount',
        'openedVbrCount' => 'OpenedVbrCount',
        'openedVpcCount' => 'OpenedVpcCount',
        'openedVpcFirewallCount' => 'OpenedVpcFirewallCount',
        'openedVpnCount' => 'OpenedVpnCount',
        'requestId' => 'RequestId',
        'totalEcrCount' => 'TotalEcrCount',
        'totalPeerTrCount' => 'TotalPeerTrCount',
        'totalVbrCount' => 'TotalVbrCount',
        'totalVpcCount' => 'TotalVpcCount',
        'totalVpcFirewallQuota' => 'TotalVpcFirewallQuota',
        'totalVpnCount' => 'TotalVpnCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableVpcFirewallQuota) {
            $res['AvailableVpcFirewallQuota'] = $this->availableVpcFirewallQuota;
        }

        if (null !== $this->cenExpressConnectVpcCount) {
            $res['CenExpressConnectVpcCount'] = $this->cenExpressConnectVpcCount;
        }

        if (null !== $this->cenFirewallVpcCount) {
            $res['CenFirewallVpcCount'] = $this->cenFirewallVpcCount;
        }

        if (null !== $this->cenTrVpcCount) {
            $res['CenTrVpcCount'] = $this->cenTrVpcCount;
        }

        if (null !== $this->closedCenFirewallCount) {
            $res['ClosedCenFirewallCount'] = $this->closedCenFirewallCount;
        }

        if (null !== $this->closedExpressConnectFirewallCount) {
            $res['ClosedExpressConnectFirewallCount'] = $this->closedExpressConnectFirewallCount;
        }

        if (null !== $this->closedVpcFirewallCount) {
            $res['ClosedVpcFirewallCount'] = $this->closedVpcFirewallCount;
        }

        if (null !== $this->configuredCenFirewallCount) {
            $res['ConfiguredCenFirewallCount'] = $this->configuredCenFirewallCount;
        }

        if (null !== $this->configuredCenFirewallRegionCount) {
            $res['ConfiguredCenFirewallRegionCount'] = $this->configuredCenFirewallRegionCount;
        }

        if (null !== $this->configuredCenFirewallVpcCount) {
            $res['ConfiguredCenFirewallVpcCount'] = $this->configuredCenFirewallVpcCount;
        }

        if (null !== $this->configuredCenTrFirewallCount) {
            $res['ConfiguredCenTrFirewallCount'] = $this->configuredCenTrFirewallCount;
        }

        if (null !== $this->configuredExpressConnectFirewallCount) {
            $res['ConfiguredExpressConnectFirewallCount'] = $this->configuredExpressConnectFirewallCount;
        }

        if (null !== $this->configuredExpressConnectVpcCount) {
            $res['ConfiguredExpressConnectVpcCount'] = $this->configuredExpressConnectVpcCount;
        }

        if (null !== $this->configuredVpcFirewallCount) {
            $res['ConfiguredVpcFirewallCount'] = $this->configuredVpcFirewallCount;
        }

        if (null !== $this->configuredVpcFirewallVpcCount) {
            $res['ConfiguredVpcFirewallVpcCount'] = $this->configuredVpcFirewallVpcCount;
        }

        if (null !== $this->expressConnectVpcCount) {
            $res['ExpressConnectVpcCount'] = $this->expressConnectVpcCount;
        }

        if (null !== $this->notConfiguredCenFirewallCount) {
            $res['NotConfiguredCenFirewallCount'] = $this->notConfiguredCenFirewallCount;
        }

        if (null !== $this->notConfiguredCenTrFirewallCount) {
            $res['NotConfiguredCenTrFirewallCount'] = $this->notConfiguredCenTrFirewallCount;
        }

        if (null !== $this->notConfiguredExpressConnectFirewallCount) {
            $res['NotConfiguredExpressConnectFirewallCount'] = $this->notConfiguredExpressConnectFirewallCount;
        }

        if (null !== $this->notConfiguredVpcFirewallCount) {
            $res['NotConfiguredVpcFirewallCount'] = $this->notConfiguredVpcFirewallCount;
        }

        if (null !== $this->openedCenExpressConnectVpcCount) {
            $res['OpenedCenExpressConnectVpcCount'] = $this->openedCenExpressConnectVpcCount;
        }

        if (null !== $this->openedCenFirewallCount) {
            $res['OpenedCenFirewallCount'] = $this->openedCenFirewallCount;
        }

        if (null !== $this->openedCenFirewallVpcCount) {
            $res['OpenedCenFirewallVpcCount'] = $this->openedCenFirewallVpcCount;
        }

        if (null !== $this->openedCenTrFirewallVpcCount) {
            $res['OpenedCenTrFirewallVpcCount'] = $this->openedCenTrFirewallVpcCount;
        }

        if (null !== $this->openedEcrCount) {
            $res['OpenedEcrCount'] = $this->openedEcrCount;
        }

        if (null !== $this->openedExpressConnectFirewallCount) {
            $res['OpenedExpressConnectFirewallCount'] = $this->openedExpressConnectFirewallCount;
        }

        if (null !== $this->openedExpressConnectVpcCount) {
            $res['OpenedExpressConnectVpcCount'] = $this->openedExpressConnectVpcCount;
        }

        if (null !== $this->openedPeerTrCount) {
            $res['OpenedPeerTrCount'] = $this->openedPeerTrCount;
        }

        if (null !== $this->openedVbrCount) {
            $res['OpenedVbrCount'] = $this->openedVbrCount;
        }

        if (null !== $this->openedVpcCount) {
            $res['OpenedVpcCount'] = $this->openedVpcCount;
        }

        if (null !== $this->openedVpcFirewallCount) {
            $res['OpenedVpcFirewallCount'] = $this->openedVpcFirewallCount;
        }

        if (null !== $this->openedVpnCount) {
            $res['OpenedVpnCount'] = $this->openedVpnCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalEcrCount) {
            $res['TotalEcrCount'] = $this->totalEcrCount;
        }

        if (null !== $this->totalPeerTrCount) {
            $res['TotalPeerTrCount'] = $this->totalPeerTrCount;
        }

        if (null !== $this->totalVbrCount) {
            $res['TotalVbrCount'] = $this->totalVbrCount;
        }

        if (null !== $this->totalVpcCount) {
            $res['TotalVpcCount'] = $this->totalVpcCount;
        }

        if (null !== $this->totalVpcFirewallQuota) {
            $res['TotalVpcFirewallQuota'] = $this->totalVpcFirewallQuota;
        }

        if (null !== $this->totalVpnCount) {
            $res['TotalVpnCount'] = $this->totalVpnCount;
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
        if (isset($map['AvailableVpcFirewallQuota'])) {
            $model->availableVpcFirewallQuota = $map['AvailableVpcFirewallQuota'];
        }

        if (isset($map['CenExpressConnectVpcCount'])) {
            $model->cenExpressConnectVpcCount = $map['CenExpressConnectVpcCount'];
        }

        if (isset($map['CenFirewallVpcCount'])) {
            $model->cenFirewallVpcCount = $map['CenFirewallVpcCount'];
        }

        if (isset($map['CenTrVpcCount'])) {
            $model->cenTrVpcCount = $map['CenTrVpcCount'];
        }

        if (isset($map['ClosedCenFirewallCount'])) {
            $model->closedCenFirewallCount = $map['ClosedCenFirewallCount'];
        }

        if (isset($map['ClosedExpressConnectFirewallCount'])) {
            $model->closedExpressConnectFirewallCount = $map['ClosedExpressConnectFirewallCount'];
        }

        if (isset($map['ClosedVpcFirewallCount'])) {
            $model->closedVpcFirewallCount = $map['ClosedVpcFirewallCount'];
        }

        if (isset($map['ConfiguredCenFirewallCount'])) {
            $model->configuredCenFirewallCount = $map['ConfiguredCenFirewallCount'];
        }

        if (isset($map['ConfiguredCenFirewallRegionCount'])) {
            $model->configuredCenFirewallRegionCount = $map['ConfiguredCenFirewallRegionCount'];
        }

        if (isset($map['ConfiguredCenFirewallVpcCount'])) {
            $model->configuredCenFirewallVpcCount = $map['ConfiguredCenFirewallVpcCount'];
        }

        if (isset($map['ConfiguredCenTrFirewallCount'])) {
            $model->configuredCenTrFirewallCount = $map['ConfiguredCenTrFirewallCount'];
        }

        if (isset($map['ConfiguredExpressConnectFirewallCount'])) {
            $model->configuredExpressConnectFirewallCount = $map['ConfiguredExpressConnectFirewallCount'];
        }

        if (isset($map['ConfiguredExpressConnectVpcCount'])) {
            $model->configuredExpressConnectVpcCount = $map['ConfiguredExpressConnectVpcCount'];
        }

        if (isset($map['ConfiguredVpcFirewallCount'])) {
            $model->configuredVpcFirewallCount = $map['ConfiguredVpcFirewallCount'];
        }

        if (isset($map['ConfiguredVpcFirewallVpcCount'])) {
            $model->configuredVpcFirewallVpcCount = $map['ConfiguredVpcFirewallVpcCount'];
        }

        if (isset($map['ExpressConnectVpcCount'])) {
            $model->expressConnectVpcCount = $map['ExpressConnectVpcCount'];
        }

        if (isset($map['NotConfiguredCenFirewallCount'])) {
            $model->notConfiguredCenFirewallCount = $map['NotConfiguredCenFirewallCount'];
        }

        if (isset($map['NotConfiguredCenTrFirewallCount'])) {
            $model->notConfiguredCenTrFirewallCount = $map['NotConfiguredCenTrFirewallCount'];
        }

        if (isset($map['NotConfiguredExpressConnectFirewallCount'])) {
            $model->notConfiguredExpressConnectFirewallCount = $map['NotConfiguredExpressConnectFirewallCount'];
        }

        if (isset($map['NotConfiguredVpcFirewallCount'])) {
            $model->notConfiguredVpcFirewallCount = $map['NotConfiguredVpcFirewallCount'];
        }

        if (isset($map['OpenedCenExpressConnectVpcCount'])) {
            $model->openedCenExpressConnectVpcCount = $map['OpenedCenExpressConnectVpcCount'];
        }

        if (isset($map['OpenedCenFirewallCount'])) {
            $model->openedCenFirewallCount = $map['OpenedCenFirewallCount'];
        }

        if (isset($map['OpenedCenFirewallVpcCount'])) {
            $model->openedCenFirewallVpcCount = $map['OpenedCenFirewallVpcCount'];
        }

        if (isset($map['OpenedCenTrFirewallVpcCount'])) {
            $model->openedCenTrFirewallVpcCount = $map['OpenedCenTrFirewallVpcCount'];
        }

        if (isset($map['OpenedEcrCount'])) {
            $model->openedEcrCount = $map['OpenedEcrCount'];
        }

        if (isset($map['OpenedExpressConnectFirewallCount'])) {
            $model->openedExpressConnectFirewallCount = $map['OpenedExpressConnectFirewallCount'];
        }

        if (isset($map['OpenedExpressConnectVpcCount'])) {
            $model->openedExpressConnectVpcCount = $map['OpenedExpressConnectVpcCount'];
        }

        if (isset($map['OpenedPeerTrCount'])) {
            $model->openedPeerTrCount = $map['OpenedPeerTrCount'];
        }

        if (isset($map['OpenedVbrCount'])) {
            $model->openedVbrCount = $map['OpenedVbrCount'];
        }

        if (isset($map['OpenedVpcCount'])) {
            $model->openedVpcCount = $map['OpenedVpcCount'];
        }

        if (isset($map['OpenedVpcFirewallCount'])) {
            $model->openedVpcFirewallCount = $map['OpenedVpcFirewallCount'];
        }

        if (isset($map['OpenedVpnCount'])) {
            $model->openedVpnCount = $map['OpenedVpnCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalEcrCount'])) {
            $model->totalEcrCount = $map['TotalEcrCount'];
        }

        if (isset($map['TotalPeerTrCount'])) {
            $model->totalPeerTrCount = $map['TotalPeerTrCount'];
        }

        if (isset($map['TotalVbrCount'])) {
            $model->totalVbrCount = $map['TotalVbrCount'];
        }

        if (isset($map['TotalVpcCount'])) {
            $model->totalVpcCount = $map['TotalVpcCount'];
        }

        if (isset($map['TotalVpcFirewallQuota'])) {
            $model->totalVpcFirewallQuota = $map['TotalVpcFirewallQuota'];
        }

        if (isset($map['TotalVpnCount'])) {
            $model->totalVpnCount = $map['TotalVpnCount'];
        }

        return $model;
    }
}
