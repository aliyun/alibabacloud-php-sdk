<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeRiskEventPayloadRequest extends Model
{
    /**
     * @description The destination IP address to query. If you specify this parameter, all intrusion events with the specified destination IP address are queried.
     *
     * @example 203.0.113.2
     *
     * @var string
     */
    public $dstIP;

    /**
     * @description The ID of the destination VPC to query. If you specify this parameter, all intrusion events that contain the specified ID of the destination VPC are queried.
     *
     * @example vpc-uf6jr1klwqb60dyn2****
     *
     * @var string
     */
    public $dstVpcId;

    /**
     * @description The end of the time range to query. The value is a timestamp. Unit: seconds.
     *
     * @example 1681288980
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of the firewall. Valid values:
     *
     *   **VpcFirewall**: virtual private cloud (VPC) firewall
     *   **InternetFirewall** (default): Internet firewall
     *
     * @example InternetFirewall
     *
     * @var string
     */
    public $firewallType;

    /**
     * @description The public IP address. If you specify this parameter, all intrusion events that contain the specified public IP address are queried.
     *
     * @example 203.0.113.3
     *
     * @var string
     */
    public $publicIP;

    /**
     * @description The source IP address to query. If you specify this parameter, all intrusion events from the specified source IP address are queried.
     *
     * @example 203.0.113.1
     *
     * @var string
     */
    public $srcIP;

    /**
     * @description The ID of the source VPC to query. If you specify this parameter, all intrusion events that contain the specified ID of the source VPC are queried.
     *
     * @example vpc-wz9j2lqyo15udw5nt****
     *
     * @var string
     */
    public $srcVpcId;

    /**
     * @description The beginning of the time range to query. The value is a timestamp. Unit: seconds.
     *
     * @example 1669533617
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The UUID of the intrusion event.
     *
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
