<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody\officeSites;

use AlibabaCloud\Dara\Model;

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
    public $specification;
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
        'specification'      => 'Specification',
        'trustKey'           => 'TrustKey',
        'vSwitchId'          => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
