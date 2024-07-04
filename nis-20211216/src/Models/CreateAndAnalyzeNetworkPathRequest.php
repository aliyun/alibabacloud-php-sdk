<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class CreateAndAnalyzeNetworkPathRequest extends Model
{
    /**
     * @description The protocol type. Valid values:
     *
     *   **tcp**: Transmission Control Protocol (TCP)
     *   **udp**: User Datagram Protocol (UDP)
     *   **icmp**: Internet Control Message Protocol (ICMP)
     *
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the region for which you want to initiate a task for analyzing network reachability.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the source resource.
     *
     * This parameter is required.
     * @example i-uf62y8khhbkbdrp6****
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The source IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIpAddress;

    /**
     * @description The source port.
     *
     * @example 0
     *
     * @var int
     */
    public $sourcePort;

    /**
     * @description The type of the source resource. Valid values:
     *
     *   **ecs**: the Elastic Compute Service (ECS) instance
     *   **internetIp**: the public IP address
     *   **vsw**: the vSwitch
     *   **vpn**: the VPN gateway
     *   **vbr**: the virtual border router (VBR)
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The ID of the destination resource.
     *
     * @example i-m5eactvw7wtpktv5****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The destination IP address.
     *
     * @example 172.50.XX.XX
     *
     * @var string
     */
    public $targetIpAddress;

    /**
     * @description The destination port.
     *
     * @example 80
     *
     * @var int
     */
    public $targetPort;

    /**
     * @description The type of the destination resource. Valid values:
     *
     *   **ecs**: the ECS instance
     *   **internetIp**: the public IP address
     *   **vsw**: the vSwitch
     *   **vpn**: the VPN gateway
     *   **vbr**: the VBR
     *   **clb**: the Classic Load Balancer (CLB) instance
     *
     * @example ecs
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'protocol'        => 'Protocol',
        'regionId'        => 'RegionId',
        'sourceId'        => 'SourceId',
        'sourceIpAddress' => 'SourceIpAddress',
        'sourcePort'      => 'SourcePort',
        'sourceType'      => 'SourceType',
        'targetId'        => 'TargetId',
        'targetIpAddress' => 'TargetIpAddress',
        'targetPort'      => 'TargetPort',
        'targetType'      => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceIpAddress) {
            $res['SourceIpAddress'] = $this->sourceIpAddress;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetIpAddress) {
            $res['TargetIpAddress'] = $this->targetIpAddress;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAndAnalyzeNetworkPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceIpAddress'])) {
            $model->sourceIpAddress = $map['SourceIpAddress'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetIpAddress'])) {
            $model->targetIpAddress = $map['TargetIpAddress'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
