<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class RescaleApplicationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example 0099b7be-5f5b-4512-a7fc-56049ef1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to automatically enable an auto scaling policy for the application. Take note of the following rules:
     *
     *   **true**: turns on Logon-free Sharing
     *   **false**: turns off Logon-free Sharing
     *
     * @example true
     *
     * @var bool
     */
    public $autoEnableApplicationScalingRule;

    /**
     * @description The percentage of the minimum number of available instances. Take note of the following rules:
     *
     *   If you set the value to **-1**, the minimum number of available instances is not determined based on this parameter. Default value: -1.
     *   If you set the value to a number **from 0 to 100**, the minimum number of available instances is calculated by using the following formula: Current number of instances × (Value of MinReadyInstanceRatio × 100%). The value is the nearest integer rounded up from the calculated result. For example, if the percentage is set to **50**% and five instances are available, the minimum number of available instances is 3.
     *
     * > When **MinReadyInstance** and **MinReadyInstanceRatio** are specified and **MinReadyInstanceRatio** is set to a number from 0 to 100, the value of MinReadyInstanceRatio** takes precedence.**** For example, if **MinReadyInstances** is set to **5, and **MinReadyInstanceRatio** is set to **50**, the minimum number of available instances is set to the nearest integer rounded up from the calculated result of the following formula: Current number of instances × **50%**.
     * @example -1
     *
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @description The minimum number of available instances. Special values:
     *
     *   If you set the value to **0**, business interruptions occur when the application is updated.
     *   If you set the value to \\*\\*-1\\*\\*, the minimum number of available instances is automatically set to a system-recommended value. The value is the nearest integer to which the calculated result of the following formula is rounded up: Current number of instances × 25%. For example, if five instances are available, the minimum number of available instances is calculated by using the following formula: 5 × 25% = 1.25. In this case, the minimum number of available instances is 2.
     *
     * > Make sure that at least one instance is available during application deployment and rollback to prevent business interruptions.
     * @example 1
     *
     * @var int
     */
    public $minReadyInstances;

    /**
     * @description The expected number of instances.
     *
     * This parameter is required.
     * @example 5
     *
     * @var int
     */
    public $replicas;
    protected $_name = [
        'appId'                            => 'AppId',
        'autoEnableApplicationScalingRule' => 'AutoEnableApplicationScalingRule',
        'minReadyInstanceRatio'            => 'MinReadyInstanceRatio',
        'minReadyInstances'                => 'MinReadyInstances',
        'replicas'                         => 'Replicas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->autoEnableApplicationScalingRule) {
            $res['AutoEnableApplicationScalingRule'] = $this->autoEnableApplicationScalingRule;
        }
        if (null !== $this->minReadyInstanceRatio) {
            $res['MinReadyInstanceRatio'] = $this->minReadyInstanceRatio;
        }
        if (null !== $this->minReadyInstances) {
            $res['MinReadyInstances'] = $this->minReadyInstances;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RescaleApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AutoEnableApplicationScalingRule'])) {
            $model->autoEnableApplicationScalingRule = $map['AutoEnableApplicationScalingRule'];
        }
        if (isset($map['MinReadyInstanceRatio'])) {
            $model->minReadyInstanceRatio = $map['MinReadyInstanceRatio'];
        }
        if (isset($map['MinReadyInstances'])) {
            $model->minReadyInstances = $map['MinReadyInstances'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        return $model;
    }
}
