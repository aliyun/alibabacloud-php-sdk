<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponse\directories;

use AlibabaCloud\Tea\Model;

class ADConnectors extends Model
{
    /**
     * @var string
     */
    public $ADConnectorAddress;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $connectorStatus;

    /**
     * @var string
     */
    public $networkInterfaceId;
    protected $_name = [
        'ADConnectorAddress' => 'ADConnectorAddress',
        'vSwitchId'          => 'VSwitchId',
        'connectorStatus'    => 'ConnectorStatus',
        'networkInterfaceId' => 'NetworkInterfaceId',
    ];

    public function validate()
    {
        Model::validateRequired('ADConnectorAddress', $this->ADConnectorAddress, true);
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('connectorStatus', $this->connectorStatus, true);
        Model::validateRequired('networkInterfaceId', $this->networkInterfaceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ADConnectorAddress) {
            $res['ADConnectorAddress'] = $this->ADConnectorAddress;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->connectorStatus) {
            $res['ConnectorStatus'] = $this->connectorStatus;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ConnectorStatus'])) {
            $model->connectorStatus = $map['ConnectorStatus'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        return $model;
    }
}
