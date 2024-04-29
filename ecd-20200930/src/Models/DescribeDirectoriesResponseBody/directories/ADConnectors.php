<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody\directories;

use AlibabaCloud\Tea\Model;

class ADConnectors extends Model
{
    /**
     * @description The connection address.
     *
     * @example 172.17.**.**
     *
     * @var string
     */
    public $ADConnectorAddress;

    /**
     * @description Valid values:
     *
     *   CONNECT_ERROR
     *   RUNNING
     *   CONNECTING: You must configure domain trust for your AD system.
     *   EXPIRED
     *   CREATING
     *
     * @example RUNNING
     *
     * @var string
     */
    public $connectorStatus;

    /**
     * @description The ID of the NIC to which the AD connector is mounted.
     *
     * @example eni-bp1i4wx78lgosrj6****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The AD connector type.
     *
     * Valid values:
     *
     *   1: General
     *
     * <!-- -->
     *
     *   2: Advanced
     *
     * <!-- -->
     * @example 1
     *
     * @var string
     */
    public $specification;

    /**
     * @description The trust password of the AD domain controller.
     *
     * @example yfpoAD****
     *
     * @var string
     */
    public $trustKey;

    /**
     * @description The ID of the vSwitch with which the AD connector is associated.
     *
     * @example vsw-bp19ocz3erfx15uon****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ADConnectorAddress' => 'ADConnectorAddress',
        'connectorStatus'    => 'ConnectorStatus',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'specification'      => 'Specification',
        'trustKey'           => 'TrustKey',
        'vSwitchId'          => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ADConnectorAddress) {
            $res['ADConnectorAddress'] = $this->ADConnectorAddress;
        }
        if (null !== $this->connectorStatus) {
            $res['ConnectorStatus'] = $this->connectorStatus;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->trustKey) {
            $res['TrustKey'] = $this->trustKey;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ADConnectors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ADConnectorAddress'])) {
            $model->ADConnectorAddress = $map['ADConnectorAddress'];
        }
        if (isset($map['ConnectorStatus'])) {
            $model->connectorStatus = $map['ConnectorStatus'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['TrustKey'])) {
            $model->trustKey = $map['TrustKey'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
