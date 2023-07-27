<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpgradeMeshEditionPartiallyRequest extends Model
{
    /**
     * @description Specifies whether to upgrade the ASM gateways for the ASM instance. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $ASMGatewayContinue;

    /**
     * @example v1.15.3.118-g4712daf0-aliyun
     *
     * @var string
     */
    public $expectedVersion;

    /**
     * @description 执行升级检查。如果该值设置为true，则只会执行升级检查，并不会实际升级。
     *
     * @example true
     *
     * @var bool
     */
    public $preCheck;

    /**
     * @description The ASM instance ID.
     *
     * @example ca04bc38979214bf2882be79d39b4****
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description *   ``
     *   ``
     *
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $switchToPro;

    /**
     * @description Specifies the ASM gateways to be upgraded. Separate multiple ASM gateways with commas (,).
     *
     * @example ingressgateway1,ingressgateway2
     *
     * @var string
     */
    public $upgradeGatewayRecords;
    protected $_name = [
        'ASMGatewayContinue'    => 'ASMGatewayContinue',
        'expectedVersion'       => 'ExpectedVersion',
        'preCheck'              => 'PreCheck',
        'serviceMeshId'         => 'ServiceMeshId',
        'switchToPro'           => 'SwitchToPro',
        'upgradeGatewayRecords' => 'UpgradeGatewayRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpgradeMeshEditionPartiallyRequest
     */
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
