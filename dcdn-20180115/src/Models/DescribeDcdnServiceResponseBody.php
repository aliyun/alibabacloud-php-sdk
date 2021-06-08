<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnServiceResponseBody\operationLocks;
use AlibabaCloud\Tea\Model;

class DescribeDcdnServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $websocketChangingTime;

    /**
     * @var string
     */
    public $websocketChangingType;

    /**
     * @var string
     */
    public $changingAffectTime;

    /**
     * @var string
     */
    public $changingChargeType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $openingTime;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $websocketType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var operationLocks
     */
    public $operationLocks;
    protected $_name = [
        'websocketChangingTime' => 'WebsocketChangingTime',
        'websocketChangingType' => 'WebsocketChangingType',
        'changingAffectTime'    => 'ChangingAffectTime',
        'changingChargeType'    => 'ChangingChargeType',
        'requestId'             => 'RequestId',
        'openingTime'           => 'OpeningTime',
        'internetChargeType'    => 'InternetChargeType',
        'websocketType'         => 'WebsocketType',
        'instanceId'            => 'InstanceId',
        'operationLocks'        => 'OperationLocks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->websocketChangingTime) {
            $res['WebsocketChangingTime'] = $this->websocketChangingTime;
        }
        if (null !== $this->websocketChangingType) {
            $res['WebsocketChangingType'] = $this->websocketChangingType;
        }
        if (null !== $this->changingAffectTime) {
            $res['ChangingAffectTime'] = $this->changingAffectTime;
        }
        if (null !== $this->changingChargeType) {
            $res['ChangingChargeType'] = $this->changingChargeType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->openingTime) {
            $res['OpeningTime'] = $this->openingTime;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->websocketType) {
            $res['WebsocketType'] = $this->websocketType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WebsocketChangingTime'])) {
            $model->websocketChangingTime = $map['WebsocketChangingTime'];
        }
        if (isset($map['WebsocketChangingType'])) {
            $model->websocketChangingType = $map['WebsocketChangingType'];
        }
        if (isset($map['ChangingAffectTime'])) {
            $model->changingAffectTime = $map['ChangingAffectTime'];
        }
        if (isset($map['ChangingChargeType'])) {
            $model->changingChargeType = $map['ChangingChargeType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OpeningTime'])) {
            $model->openingTime = $map['OpeningTime'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['WebsocketType'])) {
            $model->websocketType = $map['WebsocketType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }

        return $model;
    }
}
