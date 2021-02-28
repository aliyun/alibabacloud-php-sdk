<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnServiceResponseBody\operationLocks;
use AlibabaCloud\Tea\Model;

class DescribeScdnServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $currentDDoSBasicValue;

    /**
     * @var string
     */
    public $currentElasticProtectionValue;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $elasticProtection;

    /**
     * @var string
     */
    public $domainCountValue;

    /**
     * @var string
     */
    public $currentDomainCount;

    /**
     * @var string
     */
    public $DDoSBasic;

    /**
     * @var string
     */
    public $ccProtectionValue;

    /**
     * @var string
     */
    public $elasticProtectionValue;

    /**
     * @var string
     */
    public $openTime;

    /**
     * @var string
     */
    public $changingChargeType;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $domainCount;

    /**
     * @var string
     */
    public $currentBandwidth;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $currentElasticProtection;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $currentCcProtectionValue;

    /**
     * @var string
     */
    public $currentDDoSBasic;

    /**
     * @var string
     */
    public $currentProtectType;

    /**
     * @var string
     */
    public $currentDomainCountValue;

    /**
     * @var string
     */
    public $currentBandwidthValue;

    /**
     * @var string
     */
    public $protectTypeValue;

    /**
     * @var string
     */
    public $currentProtectTypeValue;

    /**
     * @var string
     */
    public $ccProtection;

    /**
     * @var string
     */
    public $changingAffectTime;

    /**
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $DDoSBasicValue;

    /**
     * @var string
     */
    public $protectType;

    /**
     * @var string
     */
    public $currentCcProtection;

    /**
     * @var string
     */
    public $priceType;

    /**
     * @var string
     */
    public $bandwidthValue;
    protected $_name = [
        'currentDDoSBasicValue'         => 'CurrentDDoSBasicValue',
        'currentElasticProtectionValue' => 'CurrentElasticProtectionValue',
        'endTime'                       => 'EndTime',
        'pricingCycle'                  => 'PricingCycle',
        'elasticProtection'             => 'ElasticProtection',
        'domainCountValue'              => 'DomainCountValue',
        'currentDomainCount'            => 'CurrentDomainCount',
        'DDoSBasic'                     => 'DDoSBasic',
        'ccProtectionValue'             => 'CcProtectionValue',
        'elasticProtectionValue'        => 'ElasticProtectionValue',
        'openTime'                      => 'OpenTime',
        'changingChargeType'            => 'ChangingChargeType',
        'bandwidth'                     => 'Bandwidth',
        'domainCount'                   => 'DomainCount',
        'currentBandwidth'              => 'CurrentBandwidth',
        'requestId'                     => 'RequestId',
        'currentElasticProtection'      => 'CurrentElasticProtection',
        'instanceId'                    => 'InstanceId',
        'currentCcProtectionValue'      => 'CurrentCcProtectionValue',
        'currentDDoSBasic'              => 'CurrentDDoSBasic',
        'currentProtectType'            => 'CurrentProtectType',
        'currentDomainCountValue'       => 'CurrentDomainCountValue',
        'currentBandwidthValue'         => 'CurrentBandwidthValue',
        'protectTypeValue'              => 'ProtectTypeValue',
        'currentProtectTypeValue'       => 'CurrentProtectTypeValue',
        'ccProtection'                  => 'CcProtection',
        'changingAffectTime'            => 'ChangingAffectTime',
        'operationLocks'                => 'OperationLocks',
        'internetChargeType'            => 'InternetChargeType',
        'DDoSBasicValue'                => 'DDoSBasicValue',
        'protectType'                   => 'ProtectType',
        'currentCcProtection'           => 'CurrentCcProtection',
        'priceType'                     => 'PriceType',
        'bandwidthValue'                => 'BandwidthValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentDDoSBasicValue) {
            $res['CurrentDDoSBasicValue'] = $this->currentDDoSBasicValue;
        }
        if (null !== $this->currentElasticProtectionValue) {
            $res['CurrentElasticProtectionValue'] = $this->currentElasticProtectionValue;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->elasticProtection) {
            $res['ElasticProtection'] = $this->elasticProtection;
        }
        if (null !== $this->domainCountValue) {
            $res['DomainCountValue'] = $this->domainCountValue;
        }
        if (null !== $this->currentDomainCount) {
            $res['CurrentDomainCount'] = $this->currentDomainCount;
        }
        if (null !== $this->DDoSBasic) {
            $res['DDoSBasic'] = $this->DDoSBasic;
        }
        if (null !== $this->ccProtectionValue) {
            $res['CcProtectionValue'] = $this->ccProtectionValue;
        }
        if (null !== $this->elasticProtectionValue) {
            $res['ElasticProtectionValue'] = $this->elasticProtectionValue;
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }
        if (null !== $this->changingChargeType) {
            $res['ChangingChargeType'] = $this->changingChargeType;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->currentBandwidth) {
            $res['CurrentBandwidth'] = $this->currentBandwidth;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currentElasticProtection) {
            $res['CurrentElasticProtection'] = $this->currentElasticProtection;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->currentCcProtectionValue) {
            $res['CurrentCcProtectionValue'] = $this->currentCcProtectionValue;
        }
        if (null !== $this->currentDDoSBasic) {
            $res['CurrentDDoSBasic'] = $this->currentDDoSBasic;
        }
        if (null !== $this->currentProtectType) {
            $res['CurrentProtectType'] = $this->currentProtectType;
        }
        if (null !== $this->currentDomainCountValue) {
            $res['CurrentDomainCountValue'] = $this->currentDomainCountValue;
        }
        if (null !== $this->currentBandwidthValue) {
            $res['CurrentBandwidthValue'] = $this->currentBandwidthValue;
        }
        if (null !== $this->protectTypeValue) {
            $res['ProtectTypeValue'] = $this->protectTypeValue;
        }
        if (null !== $this->currentProtectTypeValue) {
            $res['CurrentProtectTypeValue'] = $this->currentProtectTypeValue;
        }
        if (null !== $this->ccProtection) {
            $res['CcProtection'] = $this->ccProtection;
        }
        if (null !== $this->changingAffectTime) {
            $res['ChangingAffectTime'] = $this->changingAffectTime;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->DDoSBasicValue) {
            $res['DDoSBasicValue'] = $this->DDoSBasicValue;
        }
        if (null !== $this->protectType) {
            $res['ProtectType'] = $this->protectType;
        }
        if (null !== $this->currentCcProtection) {
            $res['CurrentCcProtection'] = $this->currentCcProtection;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }
        if (null !== $this->bandwidthValue) {
            $res['BandwidthValue'] = $this->bandwidthValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentDDoSBasicValue'])) {
            $model->currentDDoSBasicValue = $map['CurrentDDoSBasicValue'];
        }
        if (isset($map['CurrentElasticProtectionValue'])) {
            $model->currentElasticProtectionValue = $map['CurrentElasticProtectionValue'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['ElasticProtection'])) {
            $model->elasticProtection = $map['ElasticProtection'];
        }
        if (isset($map['DomainCountValue'])) {
            $model->domainCountValue = $map['DomainCountValue'];
        }
        if (isset($map['CurrentDomainCount'])) {
            $model->currentDomainCount = $map['CurrentDomainCount'];
        }
        if (isset($map['DDoSBasic'])) {
            $model->DDoSBasic = $map['DDoSBasic'];
        }
        if (isset($map['CcProtectionValue'])) {
            $model->ccProtectionValue = $map['CcProtectionValue'];
        }
        if (isset($map['ElasticProtectionValue'])) {
            $model->elasticProtectionValue = $map['ElasticProtectionValue'];
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }
        if (isset($map['ChangingChargeType'])) {
            $model->changingChargeType = $map['ChangingChargeType'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['CurrentBandwidth'])) {
            $model->currentBandwidth = $map['CurrentBandwidth'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CurrentElasticProtection'])) {
            $model->currentElasticProtection = $map['CurrentElasticProtection'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CurrentCcProtectionValue'])) {
            $model->currentCcProtectionValue = $map['CurrentCcProtectionValue'];
        }
        if (isset($map['CurrentDDoSBasic'])) {
            $model->currentDDoSBasic = $map['CurrentDDoSBasic'];
        }
        if (isset($map['CurrentProtectType'])) {
            $model->currentProtectType = $map['CurrentProtectType'];
        }
        if (isset($map['CurrentDomainCountValue'])) {
            $model->currentDomainCountValue = $map['CurrentDomainCountValue'];
        }
        if (isset($map['CurrentBandwidthValue'])) {
            $model->currentBandwidthValue = $map['CurrentBandwidthValue'];
        }
        if (isset($map['ProtectTypeValue'])) {
            $model->protectTypeValue = $map['ProtectTypeValue'];
        }
        if (isset($map['CurrentProtectTypeValue'])) {
            $model->currentProtectTypeValue = $map['CurrentProtectTypeValue'];
        }
        if (isset($map['CcProtection'])) {
            $model->ccProtection = $map['CcProtection'];
        }
        if (isset($map['ChangingAffectTime'])) {
            $model->changingAffectTime = $map['ChangingAffectTime'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['DDoSBasicValue'])) {
            $model->DDoSBasicValue = $map['DDoSBasicValue'];
        }
        if (isset($map['ProtectType'])) {
            $model->protectType = $map['ProtectType'];
        }
        if (isset($map['CurrentCcProtection'])) {
            $model->currentCcProtection = $map['CurrentCcProtection'];
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }
        if (isset($map['BandwidthValue'])) {
            $model->bandwidthValue = $map['BandwidthValue'];
        }

        return $model;
    }
}
