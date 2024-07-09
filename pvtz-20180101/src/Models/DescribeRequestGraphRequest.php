<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRequestGraphRequest extends Model
{
    /**
     * @description The business ID. BizId is specified together with BizType.
     *
     *   If you set BizType to AUTH_ZONE, set BizId to a zone ID.
     *   If you set BizType to RESOLVER_RULE, set BizId to the ID of a forwarding rule.
     *
     * @example b9c93a8954c4098731e863c04302f45a
     *
     * @var string
     */
    public $bizId;

    /**
     * @description The business type. Valid values:
     *
     *   AUTH_ZONE: authoritative zone
     *   RESOLVER_RULE: forwarding rule
     *
     * @example AUTH_ZONE
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The end of the time range to query. Set the time to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1571673600000
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The beginning of the time range to query. Set the time to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1571587200000
     *
     * @var int
     */
    public $startTimestamp;

    /**
     * @description The IP address of the client.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-1111
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The global ID of the zone. To query the number of DNS requests for a zone, you can specify ZoneId or BizType and BizId.
     *
     * @example 29c752a01cd281a20ddcfaecef
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'bizId'          => 'BizId',
        'bizType'        => 'BizType',
        'endTimestamp'   => 'EndTimestamp',
        'lang'           => 'Lang',
        'startTimestamp' => 'StartTimestamp',
        'userClientIp'   => 'UserClientIp',
        'vpcId'          => 'VpcId',
        'zoneId'         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRequestGraphRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
