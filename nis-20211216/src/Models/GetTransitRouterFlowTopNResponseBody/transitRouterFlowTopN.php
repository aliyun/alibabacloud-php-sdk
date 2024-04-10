<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\GetTransitRouterFlowTopNResponseBody;

use AlibabaCloud\Tea\Model;

class transitRouterFlowTopN extends Model
{
    /**
     * @description The account ID.
     *
     * @example 118639953821xxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The ID of the CEN bandwidth plan.
     *
     * @example cenbwp-ia8kw1zjv4hyal****
     *
     * @var string
     */
    public $bandwithPackageId;

    /**
     * @description The total volume of traffic in the specified time range.
     *
     * @example 188
     *
     * @var float
     */
    public $bytes;

    /**
     * @description The CEN instance ID.
     *
     * @example cen-ia8kw1zjv4hyal****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The end of the time range that you queried. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-01-31T06:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The remote IP address.
     *
     * @example 47.216.XX.XX
     *
     * @var string
     */
    public $otherIp;

    /**
     * @description The remote port.
     *
     * @example 53470
     *
     * @var string
     */
    public $otherPort;

    /**
     * @description The remote region where the **remote IP address** resides.
     *
     * @example ap-southeast-1
     *
     * @var string
     */
    public $otherRegion;

    /**
     * @description The total number of packets in the specified time range.
     *
     * @example 88
     *
     * @var float
     */
    public $packets;

    /**
     * @description The protocol number.
     *
     * @example 6
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The beginning of the time range that you queried. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-01-31T05:40:00Z
     *
     * @var string
     */
    public $startTime;

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
    protected $_name = [
        'accountId'         => 'AccountId',
        'bandwithPackageId' => 'BandwithPackageId',
        'bytes'             => 'Bytes',
        'cenId'             => 'CenId',
        'endTime'           => 'EndTime',
        'otherIp'           => 'OtherIp',
        'otherPort'         => 'OtherPort',
        'otherRegion'       => 'OtherRegion',
        'packets'           => 'Packets',
        'protocol'          => 'Protocol',
        'startTime'         => 'StartTime',
        'thisIp'            => 'ThisIp',
        'thisPort'          => 'ThisPort',
        'thisRegion'        => 'ThisRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->bandwithPackageId) {
            $res['BandwithPackageId'] = $this->bandwithPackageId;
        }
        if (null !== $this->bytes) {
            $res['Bytes'] = $this->bytes;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->packets) {
            $res['Packets'] = $this->packets;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transitRouterFlowTopN
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['BandwithPackageId'])) {
            $model->bandwithPackageId = $map['BandwithPackageId'];
        }
        if (isset($map['Bytes'])) {
            $model->bytes = $map['Bytes'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['Packets'])) {
            $model->packets = $map['Packets'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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

        return $model;
    }
}
