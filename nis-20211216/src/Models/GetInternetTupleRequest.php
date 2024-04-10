<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class GetInternetTupleRequest extends Model
{
    /**
     * @description The IDs of member accounts.
     *
     * @var int[]
     */
    public $accountIds;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1684373600099
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The local IP address.
     *
     * @example 112.74.XX.XX
     *
     * @var string
     */
    public $cloudIp;

    /**
     * @description The local IP addresses for filtering.
     *
     * @var string[]
     */
    public $cloudIpList;

    /**
     * @description The local Internet service provider (ISP).
     *
     * >  In most cases, the value is Alibaba or Alibaba Cloud.
     * @example Alibaba
     *
     * @var string
     */
    public $cloudIsp;

    /**
     * @description The local port.
     *
     * >  This parameter is required only if you set GroupBy to CloudPort.
     * @example 443
     *
     * @var string
     */
    public $cloudPort;

    /**
     * @description The direction of the Internet traffic that you want to query. Valid values:
     *
     *   **in**: inbound
     *   **out**: outbound
     *
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The end of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1684373700099
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the Alibaba Cloud instance.
     *
     * @example eip-sample*
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance IDs for filtering.
     *
     * @var string[]
     */
    public $instanceList;

    /**
     * @description The metric for data ranking. Default value: **ByteCount**. This value indicates that Internet traffic data is ranked by traffic volume.
     *
     * Valid values:
     *
     *   Rtt
     *   ByteCount
     *   PacketCount
     *   InByteCount
     *   OutByteCount
     *   InPacketCount
     *   OutPacketCount
     *   InRetranCount
     *   OutRetranCount
     *   InDupAckCount
     *   OutDupAckCount
     *   InOutOrderCount
     *   OutOutOrderCount
     *   RetranCount
     *   OutOrderCount
     *   DupAckCount
     *   RetransmitRate
     *
     * @example ByteCount
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The remote city.
     *
     * >  This parameter is required only if you set **TupleType** to **2** or **5**.
     * @example Hangzhou
     *
     * @var string
     */
    public $otherCity;

    /**
     * @description The remote country.
     *
     * >  This parameter is required only if you set **TupleType** to **2** or **5**.
     * @example China
     *
     * @var string
     */
    public $otherCountry;

    /**
     * @description The remote IP address.
     *
     * > This parameter is required only when you set **TupleType** to **2** or **5**.
     * @example 122.112.XX.XX
     *
     * @var string
     */
    public $otherIp;

    /**
     * @description The remote ISP.
     *
     * > This parameter is required if you want to view the information about the remote ISP.
     * @example China Mobile
     *
     * @var string
     */
    public $otherIsp;

    /**
     * @description The remote port.
     *
     * > This parameter is required only when you set **TupleType** to **5**.
     * @example 40002
     *
     * @var string
     */
    public $otherPort;

    /**
     * @description The protocol number.
     *
     * > All protocols are supported. This parameter is required only when you set **TupleType** to **5**.
     * @example 6
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the region for which you want to query the Internet traffic.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The order in which instances are ranked by Internet traffic. Valid values:
     *
     *   **desc**: the descending order
     *   **asc**: the ascending order
     *
     * @example desc
     *
     * @var string
     */
    public $sort;

    /**
     * @description Specifies top-N traffic data to display. Default value: **10**. This value specifies to display top-10 traffic data by default. Max value: **100**.
     *
     * @example 10
     *
     * @var int
     */
    public $topN;

    /**
     * @description The type of the tuple. Valid values:
     *
     *   **1**: 1-tuple
     *   **2**: 2-tuple
     *   **5**: 5-tuple
     *
     * @example 1
     *
     * @var int
     */
    public $tupleType;

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
        'accountIds'      => 'AccountIds',
        'beginTime'       => 'BeginTime',
        'cloudIp'         => 'CloudIp',
        'cloudIpList'     => 'CloudIpList',
        'cloudIsp'        => 'CloudIsp',
        'cloudPort'       => 'CloudPort',
        'direction'       => 'Direction',
        'endTime'         => 'EndTime',
        'instanceId'      => 'InstanceId',
        'instanceList'    => 'InstanceList',
        'orderBy'         => 'OrderBy',
        'otherCity'       => 'OtherCity',
        'otherCountry'    => 'OtherCountry',
        'otherIp'         => 'OtherIp',
        'otherIsp'        => 'OtherIsp',
        'otherPort'       => 'OtherPort',
        'protocol'        => 'Protocol',
        'regionId'        => 'RegionId',
        'sort'            => 'Sort',
        'topN'            => 'TopN',
        'tupleType'       => 'TupleType',
        'useMultiAccount' => 'UseMultiAccount',
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
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->cloudIp) {
            $res['CloudIp'] = $this->cloudIp;
        }
        if (null !== $this->cloudIpList) {
            $res['CloudIpList'] = $this->cloudIpList;
        }
        if (null !== $this->cloudIsp) {
            $res['CloudIsp'] = $this->cloudIsp;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->otherCity) {
            $res['OtherCity'] = $this->otherCity;
        }
        if (null !== $this->otherCountry) {
            $res['OtherCountry'] = $this->otherCountry;
        }
        if (null !== $this->otherIp) {
            $res['OtherIp'] = $this->otherIp;
        }
        if (null !== $this->otherIsp) {
            $res['OtherIsp'] = $this->otherIsp;
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
        if (null !== $this->tupleType) {
            $res['TupleType'] = $this->tupleType;
        }
        if (null !== $this->useMultiAccount) {
            $res['UseMultiAccount'] = $this->useMultiAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInternetTupleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CloudIp'])) {
            $model->cloudIp = $map['CloudIp'];
        }
        if (isset($map['CloudIpList'])) {
            if (!empty($map['CloudIpList'])) {
                $model->cloudIpList = $map['CloudIpList'];
            }
        }
        if (isset($map['CloudIsp'])) {
            $model->cloudIsp = $map['CloudIsp'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = $map['InstanceList'];
            }
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OtherCity'])) {
            $model->otherCity = $map['OtherCity'];
        }
        if (isset($map['OtherCountry'])) {
            $model->otherCountry = $map['OtherCountry'];
        }
        if (isset($map['OtherIp'])) {
            $model->otherIp = $map['OtherIp'];
        }
        if (isset($map['OtherIsp'])) {
            $model->otherIsp = $map['OtherIsp'];
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
        if (isset($map['TupleType'])) {
            $model->tupleType = $map['TupleType'];
        }
        if (isset($map['UseMultiAccount'])) {
            $model->useMultiAccount = $map['UseMultiAccount'];
        }

        return $model;
    }
}
