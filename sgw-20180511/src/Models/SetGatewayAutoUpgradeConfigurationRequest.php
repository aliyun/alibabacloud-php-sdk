<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class SetGatewayAutoUpgradeConfigurationRequest extends Model
{
    /**
     * @var int
     */
    public $autoUpgradeEndHour;

    /**
     * @var int
     */
    public $autoUpgradeStartHour;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var bool
     */
    public $isAutoUpgrade;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'autoUpgradeEndHour'   => 'AutoUpgradeEndHour',
        'autoUpgradeStartHour' => 'AutoUpgradeStartHour',
        'gatewayId'            => 'GatewayId',
        'isAutoUpgrade'        => 'IsAutoUpgrade',
        'securityToken'        => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUpgradeEndHour) {
            $res['AutoUpgradeEndHour'] = $this->autoUpgradeEndHour;
        }
        if (null !== $this->autoUpgradeStartHour) {
            $res['AutoUpgradeStartHour'] = $this->autoUpgradeStartHour;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->isAutoUpgrade) {
            $res['IsAutoUpgrade'] = $this->isAutoUpgrade;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetGatewayAutoUpgradeConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoUpgradeEndHour'])) {
            $model->autoUpgradeEndHour = $map['AutoUpgradeEndHour'];
        }
        if (isset($map['AutoUpgradeStartHour'])) {
            $model->autoUpgradeStartHour = $map['AutoUpgradeStartHour'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['IsAutoUpgrade'])) {
            $model->isAutoUpgrade = $map['IsAutoUpgrade'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
