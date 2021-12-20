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
    public $connectorStatus;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $trustKey;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ADConnectorAddress' => 'ADConnectorAddress',
        'connectorStatus'    => 'ConnectorStatus',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'trustKey'           => 'TrustKey',
        'vSwitchId'          => 'VSwitchId',
    ];

    public function validate()
    {
        Model::validateRequired('ADConnectorAddress', $this->ADConnectorAddress, true);
        Model::validateRequired('connectorStatus', $this->connectorStatus, true);
        Model::validateRequired('networkInterfaceId', $this->networkInterfaceId, true);
        Model::validateRequired('trustKey', $this->trustKey, true);
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
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
        if (isset($map['TrustKey'])) {
            $model->trustKey = $map['TrustKey'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
