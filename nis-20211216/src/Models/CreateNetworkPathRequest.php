<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\CreateNetworkPathRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateNetworkPathRequest extends Model
{
    /**
     * @description The description of the network path.
     *
     * @example Analyze the path from ECS to ECS
     *
     * @var string
     */
    public $networkPathDescription;

    /**
     * @description The name of the network path.
     *
     * This parameter is required.
     * @example ecs2PublicIp
     *
     * @var string
     */
    public $networkPathName;

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
     * @description The region ID of the network path that you want to create.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfm27qsxjj****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the source resource.
     *
     * This parameter is required.
     * @example i-2zef4ngqfarepyun****
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The source IP address.
     *
     * @example 172.17.XX.XX
     *
     * @var string
     */
    public $sourceIpAddress;

    /**
     * @description The source port.
     *
     * @example 443
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
     * @description The tags to add to the resource.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the destination resource.
     *
     * @example i-bp13d0e064gubm****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The destination IP address.
     *
     * @example 192.168.0.210
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
        'networkPathDescription' => 'NetworkPathDescription',
        'networkPathName'        => 'NetworkPathName',
        'protocol'               => 'Protocol',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'sourceId'               => 'SourceId',
        'sourceIpAddress'        => 'SourceIpAddress',
        'sourcePort'             => 'SourcePort',
        'sourceType'             => 'SourceType',
        'tag'                    => 'Tag',
        'targetId'               => 'TargetId',
        'targetIpAddress'        => 'TargetIpAddress',
        'targetPort'             => 'TargetPort',
        'targetType'             => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkPathDescription) {
            $res['NetworkPathDescription'] = $this->networkPathDescription;
        }
        if (null !== $this->networkPathName) {
            $res['NetworkPathName'] = $this->networkPathName;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateNetworkPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkPathDescription'])) {
            $model->networkPathDescription = $map['NetworkPathDescription'];
        }
        if (isset($map['NetworkPathName'])) {
            $model->networkPathName = $map['NetworkPathName'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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
