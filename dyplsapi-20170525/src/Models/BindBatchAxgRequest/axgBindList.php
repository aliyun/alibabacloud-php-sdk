<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgRequest;

use AlibabaCloud\Tea\Model;

class axgBindList extends Model
{
    /**
     * @example 7ee372834d2f4cc7ac0d0ab2d0ae1aac
     *
     * @var string
     */
    public $ASRModelId;

    /**
     * @example true
     *
     * @var bool
     */
    public $ASRStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $callDisplayType;

    /**
     * @example CONTROL_AX_DISABLE
     *
     * @var string
     */
    public $callRestrict;

    /**
     * @var string
     */
    public $expectCity;

    /**
     * @example 2022-07-11 01:05:15
     *
     * @var string
     */
    public $expiration;

    /**
     * @description This parameter is required.
     *
     * @example 1234
     *
     * @var string
     */
    public $groupId;

    /**
     * @example False
     *
     * @var bool
     */
    public $isRecordingEnabled;

    /**
     * @example 18223ad447910fd
     *
     * @var string
     */
    public $outId;

    /**
     * @example 20220824021816883677
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @description This parameter is required.
     *
     * @example 13333333333
     *
     * @var string
     */
    public $phoneNoA;

    /**
     * @example 13333333333
     *
     * @var string
     */
    public $phoneNoB;

    /**
     * @example 13333333333
     *
     * @var string
     */
    public $phoneNoX;

    /**
     * @example {\\"AXBRing_B\\":\\"100000002\\",\\"AXBRing_A\\":\\"100000001\\"}
     *
     * @var string
     */
    public $ringConfig;
    protected $_name = [
        'ASRModelId'         => 'ASRModelId',
        'ASRStatus'          => 'ASRStatus',
        'callDisplayType'    => 'CallDisplayType',
        'callRestrict'       => 'CallRestrict',
        'expectCity'         => 'ExpectCity',
        'expiration'         => 'Expiration',
        'groupId'            => 'GroupId',
        'isRecordingEnabled' => 'IsRecordingEnabled',
        'outId'              => 'OutId',
        'outOrderId'         => 'OutOrderId',
        'phoneNoA'           => 'PhoneNoA',
        'phoneNoB'           => 'PhoneNoB',
        'phoneNoX'           => 'PhoneNoX',
        'ringConfig'         => 'RingConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ASRModelId) {
            $res['ASRModelId'] = $this->ASRModelId;
        }
        if (null !== $this->ASRStatus) {
            $res['ASRStatus'] = $this->ASRStatus;
        }
        if (null !== $this->callDisplayType) {
            $res['CallDisplayType'] = $this->callDisplayType;
        }
        if (null !== $this->callRestrict) {
            $res['CallRestrict'] = $this->callRestrict;
        }
        if (null !== $this->expectCity) {
            $res['ExpectCity'] = $this->expectCity;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->isRecordingEnabled) {
            $res['IsRecordingEnabled'] = $this->isRecordingEnabled;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->outOrderId) {
            $res['OutOrderId'] = $this->outOrderId;
        }
        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }
        if (null !== $this->phoneNoB) {
            $res['PhoneNoB'] = $this->phoneNoB;
        }
        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }
        if (null !== $this->ringConfig) {
            $res['RingConfig'] = $this->ringConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return axgBindList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ASRModelId'])) {
            $model->ASRModelId = $map['ASRModelId'];
        }
        if (isset($map['ASRStatus'])) {
            $model->ASRStatus = $map['ASRStatus'];
        }
        if (isset($map['CallDisplayType'])) {
            $model->callDisplayType = $map['CallDisplayType'];
        }
        if (isset($map['CallRestrict'])) {
            $model->callRestrict = $map['CallRestrict'];
        }
        if (isset($map['ExpectCity'])) {
            $model->expectCity = $map['ExpectCity'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IsRecordingEnabled'])) {
            $model->isRecordingEnabled = $map['IsRecordingEnabled'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OutOrderId'])) {
            $model->outOrderId = $map['OutOrderId'];
        }
        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }
        if (isset($map['PhoneNoB'])) {
            $model->phoneNoB = $map['PhoneNoB'];
        }
        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }
        if (isset($map['RingConfig'])) {
            $model->ringConfig = $map['RingConfig'];
        }

        return $model;
    }
}
