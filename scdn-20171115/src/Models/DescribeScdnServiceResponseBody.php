<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnServiceResponseBody\operationLocks;
use AlibabaCloud\Tea\Model;

class DescribeScdnServiceResponseBody extends Model
{
    /**
     * @example 100Mbps
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @example 100
     *
     * @var string
     */
    public $bandwidthValue;

    /**
     * @example 60000Qps
     *
     * @var string
     */
    public $ccProtection;

    /**
     * @example 60000
     *
     * @var string
     */
    public $ccProtectionValue;

    /**
     * @example 2018-03-31T16:00:00Z
     *
     * @var string
     */
    public $changingAffectTime;

    /**
     * @example PayByBandwidth
     *
     * @var string
     */
    public $changingChargeType;

    /**
     * @example 3 M
     *
     * @var string
     */
    public $currentBandwidth;

    /**
     * @example 3
     *
     * @var string
     */
    public $currentBandwidthValue;

    /**
     * @example 60,000 QPS
     *
     * @var string
     */
    public $currentCcProtection;

    /**
     * @example 60000
     *
     * @var string
     */
    public $currentCcProtectionValue;

    /**
     * @example 30Gbps
     *
     * @var string
     */
    public $currentDDoSBasic;

    /**
     * @example 30
     *
     * @var string
     */
    public $currentDDoSBasicValue;

    /**
     * @example 20
     *
     * @var string
     */
    public $currentDomainCount;

    /**
     * @example 20
     *
     * @var string
     */
    public $currentDomainCountValue;

    /**
     * @example 100Gbps
     *
     * @var string
     */
    public $currentElasticProtection;

    /**
     * @example 100
     *
     * @var string
     */
    public $currentElasticProtectionValue;

    /**
     * @var string
     */
    public $currentProtectType;

    /**
     * @example standard
     *
     * @var string
     */
    public $currentProtectTypeValue;

    /**
     * @example 20Gbps
     *
     * @var string
     */
    public $DDoSBasic;

    /**
     * @example 20
     *
     * @var string
     */
    public $DDoSBasicValue;

    /**
     * @var string
     */
    public $domainCount;

    /**
     * @example 20
     *
     * @var string
     */
    public $domainCountValue;

    /**
     * @example 100Gbps
     *
     * @var string
     */
    public $elasticProtection;

    /**
     * @example 100
     *
     * @var string
     */
    public $elasticProtectionValue;

    /**
     * @example 2014-12-08T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example example ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @example 2017-11-07T16:00:00Z
     *
     * @var string
     */
    public $openTime;

    /**
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @example monthPrice
     *
     * @var string
     */
    public $priceType;

    /**
     * @example Year
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $protectType;

    /**
     * @example standard
     *
     * @var string
     */
    public $protectTypeValue;

    /**
     * @example BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bandwidth'                     => 'Bandwidth',
        'bandwidthValue'                => 'BandwidthValue',
        'ccProtection'                  => 'CcProtection',
        'ccProtectionValue'             => 'CcProtectionValue',
        'changingAffectTime'            => 'ChangingAffectTime',
        'changingChargeType'            => 'ChangingChargeType',
        'currentBandwidth'              => 'CurrentBandwidth',
        'currentBandwidthValue'         => 'CurrentBandwidthValue',
        'currentCcProtection'           => 'CurrentCcProtection',
        'currentCcProtectionValue'      => 'CurrentCcProtectionValue',
        'currentDDoSBasic'              => 'CurrentDDoSBasic',
        'currentDDoSBasicValue'         => 'CurrentDDoSBasicValue',
        'currentDomainCount'            => 'CurrentDomainCount',
        'currentDomainCountValue'       => 'CurrentDomainCountValue',
        'currentElasticProtection'      => 'CurrentElasticProtection',
        'currentElasticProtectionValue' => 'CurrentElasticProtectionValue',
        'currentProtectType'            => 'CurrentProtectType',
        'currentProtectTypeValue'       => 'CurrentProtectTypeValue',
        'DDoSBasic'                     => 'DDoSBasic',
        'DDoSBasicValue'                => 'DDoSBasicValue',
        'domainCount'                   => 'DomainCount',
        'domainCountValue'              => 'DomainCountValue',
        'elasticProtection'             => 'ElasticProtection',
        'elasticProtectionValue'        => 'ElasticProtectionValue',
        'endTime'                       => 'EndTime',
        'instanceId'                    => 'InstanceId',
        'internetChargeType'            => 'InternetChargeType',
        'openTime'                      => 'OpenTime',
        'operationLocks'                => 'OperationLocks',
        'priceType'                     => 'PriceType',
        'pricingCycle'                  => 'PricingCycle',
        'protectType'                   => 'ProtectType',
        'protectTypeValue'              => 'ProtectTypeValue',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthValue) {
            $res['BandwidthValue'] = $this->bandwidthValue;
        }
        if (null !== $this->ccProtection) {
            $res['CcProtection'] = $this->ccProtection;
        }
        if (null !== $this->ccProtectionValue) {
            $res['CcProtectionValue'] = $this->ccProtectionValue;
        }
        if (null !== $this->changingAffectTime) {
            $res['ChangingAffectTime'] = $this->changingAffectTime;
        }
        if (null !== $this->changingChargeType) {
            $res['ChangingChargeType'] = $this->changingChargeType;
        }
        if (null !== $this->currentBandwidth) {
            $res['CurrentBandwidth'] = $this->currentBandwidth;
        }
        if (null !== $this->currentBandwidthValue) {
            $res['CurrentBandwidthValue'] = $this->currentBandwidthValue;
        }
        if (null !== $this->currentCcProtection) {
            $res['CurrentCcProtection'] = $this->currentCcProtection;
        }
        if (null !== $this->currentCcProtectionValue) {
            $res['CurrentCcProtectionValue'] = $this->currentCcProtectionValue;
        }
        if (null !== $this->currentDDoSBasic) {
            $res['CurrentDDoSBasic'] = $this->currentDDoSBasic;
        }
        if (null !== $this->currentDDoSBasicValue) {
            $res['CurrentDDoSBasicValue'] = $this->currentDDoSBasicValue;
        }
        if (null !== $this->currentDomainCount) {
            $res['CurrentDomainCount'] = $this->currentDomainCount;
        }
        if (null !== $this->currentDomainCountValue) {
            $res['CurrentDomainCountValue'] = $this->currentDomainCountValue;
        }
        if (null !== $this->currentElasticProtection) {
            $res['CurrentElasticProtection'] = $this->currentElasticProtection;
        }
        if (null !== $this->currentElasticProtectionValue) {
            $res['CurrentElasticProtectionValue'] = $this->currentElasticProtectionValue;
        }
        if (null !== $this->currentProtectType) {
            $res['CurrentProtectType'] = $this->currentProtectType;
        }
        if (null !== $this->currentProtectTypeValue) {
            $res['CurrentProtectTypeValue'] = $this->currentProtectTypeValue;
        }
        if (null !== $this->DDoSBasic) {
            $res['DDoSBasic'] = $this->DDoSBasic;
        }
        if (null !== $this->DDoSBasicValue) {
            $res['DDoSBasicValue'] = $this->DDoSBasicValue;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->domainCountValue) {
            $res['DomainCountValue'] = $this->domainCountValue;
        }
        if (null !== $this->elasticProtection) {
            $res['ElasticProtection'] = $this->elasticProtection;
        }
        if (null !== $this->elasticProtectionValue) {
            $res['ElasticProtectionValue'] = $this->elasticProtectionValue;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->protectType) {
            $res['ProtectType'] = $this->protectType;
        }
        if (null !== $this->protectTypeValue) {
            $res['ProtectTypeValue'] = $this->protectTypeValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthValue'])) {
            $model->bandwidthValue = $map['BandwidthValue'];
        }
        if (isset($map['CcProtection'])) {
            $model->ccProtection = $map['CcProtection'];
        }
        if (isset($map['CcProtectionValue'])) {
            $model->ccProtectionValue = $map['CcProtectionValue'];
        }
        if (isset($map['ChangingAffectTime'])) {
            $model->changingAffectTime = $map['ChangingAffectTime'];
        }
        if (isset($map['ChangingChargeType'])) {
            $model->changingChargeType = $map['ChangingChargeType'];
        }
        if (isset($map['CurrentBandwidth'])) {
            $model->currentBandwidth = $map['CurrentBandwidth'];
        }
        if (isset($map['CurrentBandwidthValue'])) {
            $model->currentBandwidthValue = $map['CurrentBandwidthValue'];
        }
        if (isset($map['CurrentCcProtection'])) {
            $model->currentCcProtection = $map['CurrentCcProtection'];
        }
        if (isset($map['CurrentCcProtectionValue'])) {
            $model->currentCcProtectionValue = $map['CurrentCcProtectionValue'];
        }
        if (isset($map['CurrentDDoSBasic'])) {
            $model->currentDDoSBasic = $map['CurrentDDoSBasic'];
        }
        if (isset($map['CurrentDDoSBasicValue'])) {
            $model->currentDDoSBasicValue = $map['CurrentDDoSBasicValue'];
        }
        if (isset($map['CurrentDomainCount'])) {
            $model->currentDomainCount = $map['CurrentDomainCount'];
        }
        if (isset($map['CurrentDomainCountValue'])) {
            $model->currentDomainCountValue = $map['CurrentDomainCountValue'];
        }
        if (isset($map['CurrentElasticProtection'])) {
            $model->currentElasticProtection = $map['CurrentElasticProtection'];
        }
        if (isset($map['CurrentElasticProtectionValue'])) {
            $model->currentElasticProtectionValue = $map['CurrentElasticProtectionValue'];
        }
        if (isset($map['CurrentProtectType'])) {
            $model->currentProtectType = $map['CurrentProtectType'];
        }
        if (isset($map['CurrentProtectTypeValue'])) {
            $model->currentProtectTypeValue = $map['CurrentProtectTypeValue'];
        }
        if (isset($map['DDoSBasic'])) {
            $model->DDoSBasic = $map['DDoSBasic'];
        }
        if (isset($map['DDoSBasicValue'])) {
            $model->DDoSBasicValue = $map['DDoSBasicValue'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['DomainCountValue'])) {
            $model->domainCountValue = $map['DomainCountValue'];
        }
        if (isset($map['ElasticProtection'])) {
            $model->elasticProtection = $map['ElasticProtection'];
        }
        if (isset($map['ElasticProtectionValue'])) {
            $model->elasticProtectionValue = $map['ElasticProtectionValue'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['ProtectType'])) {
            $model->protectType = $map['ProtectType'];
        }
        if (isset($map['ProtectTypeValue'])) {
            $model->protectTypeValue = $map['ProtectTypeValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
