<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody\connectors\applications;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody\connectors\connectorClients;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody\connectors\upgradeTime;

class connectors extends Model
{
    /**
     * @var applications[]
     */
    public $applications;

    /**
     * @var string
     */
    public $clusterIP;

    /**
     * @var string
     */
    public $clusterPort;

    /**
     * @var connectorClients[]
     */
    public $connectorClients;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $switchStatus;

    /**
     * @var upgradeTime
     */
    public $upgradeTime;
    protected $_name = [
        'applications' => 'Applications',
        'clusterIP' => 'ClusterIP',
        'clusterPort' => 'ClusterPort',
        'connectorClients' => 'ConnectorClients',
        'connectorId' => 'ConnectorId',
        'createTime' => 'CreateTime',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'switchStatus' => 'SwitchStatus',
        'upgradeTime' => 'UpgradeTime',
    ];

    public function validate()
    {
        if (\is_array($this->applications)) {
            Model::validateArray($this->applications);
        }
        if (\is_array($this->connectorClients)) {
            Model::validateArray($this->connectorClients);
        }
        if (null !== $this->upgradeTime) {
            $this->upgradeTime->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applications) {
            if (\is_array($this->applications)) {
                $res['Applications'] = [];
                $n1 = 0;
                foreach ($this->applications as $item1) {
                    $res['Applications'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterIP) {
            $res['ClusterIP'] = $this->clusterIP;
        }

        if (null !== $this->clusterPort) {
            $res['ClusterPort'] = $this->clusterPort;
        }

        if (null !== $this->connectorClients) {
            if (\is_array($this->connectorClients)) {
                $res['ConnectorClients'] = [];
                $n1 = 0;
                foreach ($this->connectorClients as $item1) {
                    $res['ConnectorClients'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
        }

        if (null !== $this->upgradeTime) {
            $res['UpgradeTime'] = null !== $this->upgradeTime ? $this->upgradeTime->toArray($noStream) : $this->upgradeTime;
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
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n1 = 0;
                foreach ($map['Applications'] as $item1) {
                    $model->applications[$n1] = applications::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterIP'])) {
            $model->clusterIP = $map['ClusterIP'];
        }

        if (isset($map['ClusterPort'])) {
            $model->clusterPort = $map['ClusterPort'];
        }

        if (isset($map['ConnectorClients'])) {
            if (!empty($map['ConnectorClients'])) {
                $model->connectorClients = [];
                $n1 = 0;
                foreach ($map['ConnectorClients'] as $item1) {
                    $model->connectorClients[$n1] = connectorClients::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }

        if (isset($map['UpgradeTime'])) {
            $model->upgradeTime = upgradeTime::fromMap($map['UpgradeTime']);
        }

        return $model;
    }
}
