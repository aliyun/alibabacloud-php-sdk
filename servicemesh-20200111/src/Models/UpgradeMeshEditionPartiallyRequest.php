<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class UpgradeMeshEditionPartiallyRequest extends Model
{
    /**
     * @var bool
     */
    public $ASMGatewayContinue;

    /**
     * @var string
     */
    public $expectedVersion;

    /**
     * @var bool
     */
    public $preCheck;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var bool
     */
    public $switchToPro;

    /**
     * @var string
     */
    public $upgradeGatewayRecords;
    protected $_name = [
        'ASMGatewayContinue' => 'ASMGatewayContinue',
        'expectedVersion' => 'ExpectedVersion',
        'preCheck' => 'PreCheck',
        'serviceMeshId' => 'ServiceMeshId',
        'switchToPro' => 'SwitchToPro',
        'upgradeGatewayRecords' => 'UpgradeGatewayRecords',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ASMGatewayContinue) {
            $res['ASMGatewayContinue'] = $this->ASMGatewayContinue;
        }

        if (null !== $this->expectedVersion) {
            $res['ExpectedVersion'] = $this->expectedVersion;
        }

        if (null !== $this->preCheck) {
            $res['PreCheck'] = $this->preCheck;
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        if (null !== $this->switchToPro) {
            $res['SwitchToPro'] = $this->switchToPro;
        }

        if (null !== $this->upgradeGatewayRecords) {
            $res['UpgradeGatewayRecords'] = $this->upgradeGatewayRecords;
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
        if (isset($map['ASMGatewayContinue'])) {
            $model->ASMGatewayContinue = $map['ASMGatewayContinue'];
        }

        if (isset($map['ExpectedVersion'])) {
            $model->expectedVersion = $map['ExpectedVersion'];
        }

        if (isset($map['PreCheck'])) {
            $model->preCheck = $map['PreCheck'];
        }

        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        if (isset($map['SwitchToPro'])) {
            $model->switchToPro = $map['SwitchToPro'];
        }

        if (isset($map['UpgradeGatewayRecords'])) {
            $model->upgradeGatewayRecords = $map['UpgradeGatewayRecords'];
        }

        return $model;
    }
}
