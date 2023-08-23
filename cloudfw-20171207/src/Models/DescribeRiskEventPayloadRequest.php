<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeRiskEventPayloadRequest extends Model
{
    /**
     * @example 203.0.113.2
     *
     * @var string
     */
    public $dstIP;

    /**
     * @example vpc-uf6jr1klwqb60dyn2****
     *
     * @var string
     */
    public $dstVpcId;

    /**
     * @example 1681288980
     *
     * @var string
     */
    public $endTime;

    /**
     * @example InternetFirewall
     *
     * @var string
     */
    public $firewallType;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @example 203.0.113.1
     *
     * @var string
     */
    public $srcIP;

    /**
     * @example vpc-wz9j2lqyo15udw5nt****
     *
     * @var string
     */
    public $srcVpcId;

    /**
     * @example 1669533617
     *
     * @var string
     */
    public $startTime;

    /**
     * @example e62c25e0-1073-46bd-9567-b8f12b3d****
     *
     * @var string
     */
    public $UUID;
    protected $_name = [
        'dstIP'        => 'DstIP',
        'dstVpcId'     => 'DstVpcId',
        'endTime'      => 'EndTime',
        'firewallType' => 'FirewallType',
        'publicIP'     => 'PublicIP',
        'srcIP'        => 'SrcIP',
        'srcVpcId'     => 'SrcVpcId',
        'startTime'    => 'StartTime',
        'UUID'         => 'UUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }
        if (null !== $this->dstVpcId) {
            $res['DstVpcId'] = $this->dstVpcId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->firewallType) {
            $res['FirewallType'] = $this->firewallType;
        }
        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }
        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }
        if (null !== $this->srcVpcId) {
            $res['SrcVpcId'] = $this->srcVpcId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskEventPayloadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }
        if (isset($map['DstVpcId'])) {
            $model->dstVpcId = $map['DstVpcId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FirewallType'])) {
            $model->firewallType = $map['FirewallType'];
        }
        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }
        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }
        if (isset($map['SrcVpcId'])) {
            $model->srcVpcId = $map['SrcVpcId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }

        return $model;
    }
}
