<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponseBody\virtualBorderRouterForPhysicalConnectionSet;

use AlibabaCloud\Tea\Model;

class virtualBorderRouterForPhysicalConnectionType extends Model
{
    /**
     * @var string
     */
    public $activationTime;

    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $recoveryTime;

    /**
     * @var string
     */
    public $terminationTime;

    /**
     * @var string
     */
    public $vbrId;

    /**
     * @var int
     */
    public $vbrOwnerUid;

    /**
     * @var int
     */
    public $vlanId;
    protected $_name = [
        'activationTime'  => 'ActivationTime',
        'circuitCode'     => 'CircuitCode',
        'creationTime'    => 'CreationTime',
        'recoveryTime'    => 'RecoveryTime',
        'terminationTime' => 'TerminationTime',
        'vbrId'           => 'VbrId',
        'vbrOwnerUid'     => 'VbrOwnerUid',
        'vlanId'          => 'VlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activationTime) {
            $res['ActivationTime'] = $this->activationTime;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->recoveryTime) {
            $res['RecoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->terminationTime) {
            $res['TerminationTime'] = $this->terminationTime;
        }
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }
        if (null !== $this->vbrOwnerUid) {
            $res['VbrOwnerUid'] = $this->vbrOwnerUid;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualBorderRouterForPhysicalConnectionType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivationTime'])) {
            $model->activationTime = $map['ActivationTime'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['RecoveryTime'])) {
            $model->recoveryTime = $map['RecoveryTime'];
        }
        if (isset($map['TerminationTime'])) {
            $model->terminationTime = $map['TerminationTime'];
        }
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }
        if (isset($map['VbrOwnerUid'])) {
            $model->vbrOwnerUid = $map['VbrOwnerUid'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
