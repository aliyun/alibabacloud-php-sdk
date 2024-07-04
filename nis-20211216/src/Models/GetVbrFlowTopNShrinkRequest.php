<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class GetVbrFlowTopNShrinkRequest extends Model
{
    /**
     * @description The IDs of member accounts.
     *
     * @var string
     */
    public $accountIdsShrink;

    /**
     * @description The CEN connection ID.
     *
     * @example tr-attach-dnv870gmqzmb5u****
     *
     * @var string
     */
    public $attachmentId;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. The maximum time range that you can query is 24 hours.
     *
     * This parameter is required.
     * @example 1638239092000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The CEN instance ID.
     *
     * @example cen-ia8kw1zjv4hyal****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The local IP address.
     *
     * @example 112.74.XX.XX
     *
     * @var string
     */
    public $cloudIp;

    /**
     * @description The local port.
     *
     * >  This parameter is required only if you set **GroupBy** to **CloudPort**.
     * @example 443
     *
     * @var string
     */
    public $cloudPort;

    /**
     * @description The direction of the hybrid cloud traffic in the local regions or for the local IP addresses. Valid values:
     *
     *   **in**: traffic from a data center to Alibaba Cloud
     *   **out**: traffic from Alibaba Cloud to a data center
     *
     * This parameter is required.
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The end of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. The maximum time range that you can query is 24 hours.
     *
     * This parameter is required.
     * @example 1638239093000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The dimension for ranking hybrid cloud traffic data. The value of this parameter is case-sensitive. Valid values:
     *
     *   **1Tuple**: queries the rankings of hybrid cloud traffic data for the Cloud Enterprise Network (CEN) instances, CEN connections, virtual border routers (VBRs), and IP addresses.
     *   **2Tuple**: queries the rankings of hybrid cloud traffic data for the local and remote IP addresses.
     *   **5Tuple**: queries the rankings of hybrid cloud traffic data for the local and remote IP addresses, local and remote ports, and protocols.
     *   **CloudPort**: queries the rankings of hybrid cloud traffic data for the local ports.
     *   **OtherPort**: queries the rankings of hybrid cloud traffic data for the remote ports.
     *   **Protocol**: queries the rankings of hybrid cloud traffic data for the protocols.
     *
     * This parameter is required.
     * @example 1Tuple
     *
     * @var string
     */
    public $groupBy;

    /**
     * @description The metric for ranking hybrid cloud traffic data. Default value: Bytes. This value specifies that hybrid cloud traffic data is ranked by traffic volumes.
     *
     * @example Bytes
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The remote IP address.
     *
     * @example 122.112.XX.XX
     *
     * @var string
     */
    public $otherIp;

    /**
     * @description The remote port.
     *
     * >  This parameter is required only if you set **GroupBy** to **OtherPort**.
     * @example 40002
     *
     * @var string
     */
    public $otherPort;

    /**
     * @description The protocol number.
     *
     * >  All protocols are supported. This parameter is required only if you set **GroupBy** to **5Tuple** or **Protocol**.
     * @example 6
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The local region.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The order for ranking hybrid cloud traffic data. Valid values:
     *
     *   **desc**: descending order
     *   **asc**: ascending order
     *
     * @example desc
     *
     * @var string
     */
    public $sort;

    /**
     * @description Specifies top-N traffic data to display. Default value: **10**. This value specifies that top-10 traffic data is displayed by default. Maximum value: **100**.
     *
     * @example 10
     *
     * @var int
     */
    public $topN;

    /**
     * @description Specifies whether to enable the multi-account management feature. Default value: **false**. This value specifies that the multi-account management feature is disabled.
     *
     * >  By default, the multi-account management feature is not available. If you want to use this feature, contact your account manager to apply for permissions.
     * @example false
     *
     * @var bool
     */
    public $useMultiAccount;

    /**
     * @description The ID of the VBR that is associated with the Express Connect circuit.
     *
     * @example vbr-k1atj46citwuek42j****
     *
     * @var string
     */
    public $virtualBorderRouterId;
    protected $_name = [
        'accountIdsShrink'      => 'AccountIds',
        'attachmentId'          => 'AttachmentId',
        'beginTime'             => 'BeginTime',
        'cenId'                 => 'CenId',
        'cloudIp'               => 'CloudIp',
        'cloudPort'             => 'CloudPort',
        'direction'             => 'Direction',
        'endTime'               => 'EndTime',
        'groupBy'               => 'GroupBy',
        'orderBy'               => 'OrderBy',
        'otherIp'               => 'OtherIp',
        'otherPort'             => 'OtherPort',
        'protocol'              => 'Protocol',
        'regionId'              => 'RegionId',
        'sort'                  => 'Sort',
        'topN'                  => 'TopN',
        'useMultiAccount'       => 'UseMultiAccount',
        'virtualBorderRouterId' => 'VirtualBorderRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIdsShrink) {
            $res['AccountIds'] = $this->accountIdsShrink;
        }
        if (null !== $this->attachmentId) {
            $res['AttachmentId'] = $this->attachmentId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cloudIp) {
            $res['CloudIp'] = $this->cloudIp;
        }
        if (null !== $this->cloudPort) {
            $res['CloudPort'] = $this->cloudPort;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->otherIp) {
            $res['OtherIp'] = $this->otherIp;
        }
        if (null !== $this->otherPort) {
            $res['OtherPort'] = $this->otherPort;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
        }
        if (null !== $this->useMultiAccount) {
            $res['UseMultiAccount'] = $this->useMultiAccount;
        }
        if (null !== $this->virtualBorderRouterId) {
            $res['VirtualBorderRouterId'] = $this->virtualBorderRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVbrFlowTopNShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            $model->accountIdsShrink = $map['AccountIds'];
        }
        if (isset($map['AttachmentId'])) {
            $model->attachmentId = $map['AttachmentId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CloudIp'])) {
            $model->cloudIp = $map['CloudIp'];
        }
        if (isset($map['CloudPort'])) {
            $model->cloudPort = $map['CloudPort'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OtherIp'])) {
            $model->otherIp = $map['OtherIp'];
        }
        if (isset($map['OtherPort'])) {
            $model->otherPort = $map['OtherPort'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }
        if (isset($map['UseMultiAccount'])) {
            $model->useMultiAccount = $map['UseMultiAccount'];
        }
        if (isset($map['VirtualBorderRouterId'])) {
            $model->virtualBorderRouterId = $map['VirtualBorderRouterId'];
        }

        return $model;
    }
}
