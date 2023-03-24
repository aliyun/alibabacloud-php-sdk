<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody\connectors\applications;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody\connectors\upgradeTime;
use AlibabaCloud\Tea\Model;

class connectors extends Model
{
    /**
     * @var applications[]
     */
    public $applications;

    /**
     * @description ConnectorID。
     *
     * @example connector-94db94e06b98****
     *
     * @var string
     */
    public $connectorId;

    /**
     * @example 2022-09-27 18:10:25
     *
     * @var string
     */
    public $createTime;

    /**
     * @example connector_name
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Online
     *
     * @var string
     */
    public $status;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $switchStatus;

    /**
     * @var upgradeTime
     */
    public $upgradeTime;
    protected $_name = [
        'applications' => 'Applications',
        'connectorId'  => 'ConnectorId',
        'createTime'   => 'CreateTime',
        'name'         => 'Name',
        'regionId'     => 'RegionId',
        'status'       => 'Status',
        'switchStatus' => 'SwitchStatus',
        'upgradeTime'  => 'UpgradeTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applications) {
            $res['Applications'] = [];
            if (null !== $this->applications && \is_array($this->applications)) {
                $n = 0;
                foreach ($this->applications as $item) {
                    $res['Applications'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['UpgradeTime'] = null !== $this->upgradeTime ? $this->upgradeTime->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n                   = 0;
                foreach ($map['Applications'] as $item) {
                    $model->applications[$n++] = null !== $item ? applications::fromMap($item) : $item;
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
