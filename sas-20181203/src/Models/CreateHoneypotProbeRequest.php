<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeRequest\honeypotBindList;
use AlibabaCloud\Tea\Model;

class CreateHoneypotProbeRequest extends Model
{
    /**
     * @description Specifies whether to enable Address Resolution Protocol (ARP) spoofing. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $arp;

    /**
     * @description The ID of the business group.
     *
     * @example 2022011817324588686
     *
     * @var string
     */
    public $businessGroupId;

    /**
     * @description The ID of the management node.
     *
     * >  You can call the [ListHoneypotNode](~~ListHoneypotNode~~) operation to query the IDs of management nodes.
     * @example a882e590-b87b-45a6-87b9-d0a3e5a0****
     *
     * @var string
     */
    public $controlNodeId;

    /**
     * @description The name of the probe.
     *
     * @example testHoneyPotProbe
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The honeypot configurations.
     *
     * @var honeypotBindList[]
     */
    public $honeypotBindList;

    /**
     * @description Specifies whether to enable ping scan. Valid values:
     *
     *   **false**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $ping;

    /**
     * @description The type of the probe. Valid values:
     *
     *   **host_probe**: host probe
     *   **vpc_black_hole_probe**: virtual private cloud (VPC) probe
     *
     * @example host_probe
     *
     * @var string
     */
    public $probeType;

    /**
     * @description The version of the probe.
     *
     * @example 0.0.0
     *
     * @var string
     */
    public $probeVersion;

    /**
     * @description The IP address of the proxy.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $proxyIp;

    /**
     * @description The UUID of the instance.
     *
     * >  If **ProbeType** is set to **host_probe**, this parameter is required.
     * @example e4af3620-6895-4e2f-a641-a9d8fb53****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the VPC.
     *
     * >  If **ProbeType** is set to **vpc_black_hole_probe**, this parameter is required. You can call the DescribeVpcHoneyPotList operation to query the IDs of VPCs.
     * @example vpc-zm0asrkpv1q8gnk7mn4dn
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'arp'              => 'Arp',
        'businessGroupId'  => 'BusinessGroupId',
        'controlNodeId'    => 'ControlNodeId',
        'displayName'      => 'DisplayName',
        'honeypotBindList' => 'HoneypotBindList',
        'ping'             => 'Ping',
        'probeType'        => 'ProbeType',
        'probeVersion'     => 'ProbeVersion',
        'proxyIp'          => 'ProxyIp',
        'uuid'             => 'Uuid',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arp) {
            $res['Arp'] = $this->arp;
        }
        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }
        if (null !== $this->controlNodeId) {
            $res['ControlNodeId'] = $this->controlNodeId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->honeypotBindList) {
            $res['HoneypotBindList'] = [];
            if (null !== $this->honeypotBindList && \is_array($this->honeypotBindList)) {
                $n = 0;
                foreach ($this->honeypotBindList as $item) {
                    $res['HoneypotBindList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ping) {
            $res['Ping'] = $this->ping;
        }
        if (null !== $this->probeType) {
            $res['ProbeType'] = $this->probeType;
        }
        if (null !== $this->probeVersion) {
            $res['ProbeVersion'] = $this->probeVersion;
        }
        if (null !== $this->proxyIp) {
            $res['ProxyIp'] = $this->proxyIp;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHoneypotProbeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arp'])) {
            $model->arp = $map['Arp'];
        }
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }
        if (isset($map['ControlNodeId'])) {
            $model->controlNodeId = $map['ControlNodeId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['HoneypotBindList'])) {
            if (!empty($map['HoneypotBindList'])) {
                $model->honeypotBindList = [];
                $n                       = 0;
                foreach ($map['HoneypotBindList'] as $item) {
                    $model->honeypotBindList[$n++] = null !== $item ? honeypotBindList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ping'])) {
            $model->ping = $map['Ping'];
        }
        if (isset($map['ProbeType'])) {
            $model->probeType = $map['ProbeType'];
        }
        if (isset($map['ProbeVersion'])) {
            $model->probeVersion = $map['ProbeVersion'];
        }
        if (isset($map['ProxyIp'])) {
            $model->proxyIp = $map['ProxyIp'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
