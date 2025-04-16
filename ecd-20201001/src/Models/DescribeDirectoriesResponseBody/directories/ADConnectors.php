<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDirectoriesResponseBody\directories;

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
    public $vSwitchId;
    protected $_name = [
        'ADConnectorAddress' => 'ADConnectorAddress',
        'connectorStatus' => 'ConnectorStatus',
        'vSwitchId' => 'VSwitchId',
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

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
