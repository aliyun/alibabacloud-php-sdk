<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetConnectorResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetConnectorResponseBody\connector\upgradeTime;

class connector extends Model
{
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

    /**
     * @var string
     */
    public $vipCidr;
    protected $_name = [
        'connectorId' => 'ConnectorId',
        'createTime' => 'CreateTime',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'switchStatus' => 'SwitchStatus',
        'upgradeTime' => 'UpgradeTime',
        'vipCidr' => 'VipCidr',
    ];

    public function validate()
    {
        if (null !== $this->upgradeTime) {
            $this->upgradeTime->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->vipCidr) {
            $res['VipCidr'] = $this->vipCidr;
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

        if (isset($map['VipCidr'])) {
            $model->vipCidr = $map['VipCidr'];
        }

        return $model;
    }
}
