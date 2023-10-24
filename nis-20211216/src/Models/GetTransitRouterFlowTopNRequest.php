<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class GetTransitRouterFlowTopNRequest extends Model
{
    /**
     * @description The IDs of member accounts.
     *
     * @var string[]
     */
    public $accountIds;

    /**
     * @description The ID of the CEN bandwidth plan.
     *
     * @example cenbwp-ia8kw1zjv4hyal*****
     *
     * @var string
     */
    public $bandwithPackageId;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. The maximum time range that you can query is 24 hours.
     *
     * @example 1684373600099
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
     * @description The direction of the inter-region traffic in the local regions or for the local IP addresses. Valid values:
     *
     *   in: inbound traffic
     *   out: outbound traffic
     *
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The end of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. The maximum time range that you can query is 24 hours.
     *
     * @example 1638239093000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The dimension for ranking inter-region traffic data. The value of this parameter is case-sensitive. Valid values:
     *
     *   1Tuple: queries the rankings of inter-region traffic data for the local regions, Cloud Enterprise Network (CEN) instances, and IP addresses.
     *   2Tuple: queries the rankings of inter-region traffic data for the local and remote regions, and the local and remote IP addresses.
     *   5Tuple: queries the rankings of inter-region traffic data for the local and remote IP addresses, local and remote ports, and protocols in use.
     *   Cen: queries the rankings of inter-region traffic data for CEN instances.
     *   RegionPair: queries the rankings of inter-region traffic data for the local and remote regions.
     *   Port: queries the rankings of inter-region traffic data for the local and remote ports.
     *   Protocol: queries the rankings of inter-region traffic data for the protocols in use.
     *
     * @example 1Tuple
     *
     * @var string
     */
    public $groupBy;

    /**
     * @description The metric for ranking inter-region traffic data. Default value: Bytes. This value specifies that inter-region traffic data is ranked by traffic volume.
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
     * @example 10869
     *
     * @var string
     */
    public $otherPort;

    /**
     * @description The remote region.
     *
     * @example ap-southeast-1
     *
     * @var string
     */
    public $otherRegion;

    /**
     * @description The protocol number.
     *
     * >  All protocols are supported. This parameter is required only if you set GroupBy to 5Tuple or Protocol.
     * @example 6
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The order for ranking inter-region traffic data. Valid values:
     *
     *   desc: descending order
     *   asc: ascending order
     *
     * @example desc
     *
     * @var string
     */
    public $sort;

    /**
     * @description The local IP address.
     *
     * @example 1.8.XX.XX
     *
     * @var string
     */
    public $thisIp;

    /**
     * @description The local port.
     *
     * @example 80
     *
     * @var string
     */
    public $thisPort;

    /**
     * @description The local region where the **local IP address** resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $thisRegion;

    /**
     * @description Specifies the maximum number of data entries to display. Default value: **10**. Maximum value: 100.
     *
     * @example 20
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
    protected $_name = [
        'accountIds'        => 'AccountIds',
        'bandwithPackageId' => 'BandwithPackageId',
        'beginTime'         => 'BeginTime',
        'cenId'             => 'CenId',
        'direction'         => 'Direction',
        'endTime'           => 'EndTime',
        'groupBy'           => 'GroupBy',
        'orderBy'           => 'OrderBy',
        'otherIp'           => 'OtherIp',
        'otherPort'         => 'OtherPort',
        'otherRegion'       => 'OtherRegion',
        'protocol'          => 'Protocol',
        'sort'              => 'Sort',
        'thisIp'            => 'ThisIp',
        'thisPort'          => 'ThisPort',
        'thisRegion'        => 'ThisRegion',
        'topN'              => 'TopN',
        'useMultiAccount'   => 'UseMultiAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->bandwithPackageId) {
            $res['BandwithPackageId'] = $this->bandwithPackageId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
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
        if (null !== $this->otherRegion) {
            $res['OtherRegion'] = $this->otherRegion;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->thisIp) {
            $res['ThisIp'] = $this->thisIp;
        }
        if (null !== $this->thisPort) {
            $res['ThisPort'] = $this->thisPort;
        }
        if (null !== $this->thisRegion) {
            $res['ThisRegion'] = $this->thisRegion;
        }
        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
        }
        if (null !== $this->useMultiAccount) {
            $res['UseMultiAccount'] = $this->useMultiAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTransitRouterFlowTopNRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['BandwithPackageId'])) {
            $model->bandwithPackageId = $map['BandwithPackageId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
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
        if (isset($map['OtherRegion'])) {
            $model->otherRegion = $map['OtherRegion'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['ThisIp'])) {
            $model->thisIp = $map['ThisIp'];
        }
        if (isset($map['ThisPort'])) {
            $model->thisPort = $map['ThisPort'];
        }
        if (isset($map['ThisRegion'])) {
            $model->thisRegion = $map['ThisRegion'];
        }
        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }
        if (isset($map['UseMultiAccount'])) {
            $model->useMultiAccount = $map['UseMultiAccount'];
        }

        return $model;
    }
}
