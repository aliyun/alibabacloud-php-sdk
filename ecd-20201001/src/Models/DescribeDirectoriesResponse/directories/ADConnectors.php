<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDirectoriesResponse\directories;

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
    protected $_name = [
        'ADConnectorAddress' => 'ADConnectorAddress',
        'vSwitchId'          => 'VSwitchId',
        'connectorStatus'    => 'ConnectorStatus',
    ];

    public function validate()
    {
        Model::validateRequired('ADConnectorAddress', $this->ADConnectorAddress, true);
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('connectorStatus', $this->connectorStatus, true);
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

        return $model;
    }
}
