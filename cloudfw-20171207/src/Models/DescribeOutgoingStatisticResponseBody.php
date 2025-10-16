<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeOutgoingStatisticResponseBody extends Model
{
    /**
     * @var int
     */
    public $ignoreAssetCount;

    /**
     * @var int
     */
    public $ignoreDomainCount;

    /**
     * @var int
     */
    public $ignoreDstIPCount;

    /**
     * @var int
     */
    public $privateRiskAssetCount;

    /**
     * @var int
     */
    public $privateTotalAssetCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $riskAssetCount;

    /**
     * @var int
     */
    public $riskDomainCount;

    /**
     * @var int
     */
    public $riskDstIPCount;

    /**
     * @var int
     */
    public $subscribeAssetCount;

    /**
     * @var int
     */
    public $subscribeDomainCount;

    /**
     * @var int
     */
    public $subscribeDstIPCount;

    /**
     * @var int
     */
    public $totalAssetCount;

    /**
     * @var int
     */
    public $totalDomainCount;

    /**
     * @var int
     */
    public $totalDstIPCount;

    /**
     * @var int
     */
    public $totalProtocolCount;

    /**
     * @var int
     */
    public $uncoveredAclDomain;

    /**
     * @var int
     */
    public $uncoveredAclDstIP;

    /**
     * @var string
     */
    public $unknownProtocolRadio;
    protected $_name = [
        'ignoreAssetCount' => 'IgnoreAssetCount',
        'ignoreDomainCount' => 'IgnoreDomainCount',
        'ignoreDstIPCount' => 'IgnoreDstIPCount',
        'privateRiskAssetCount' => 'PrivateRiskAssetCount',
        'privateTotalAssetCount' => 'PrivateTotalAssetCount',
        'requestId' => 'RequestId',
        'riskAssetCount' => 'RiskAssetCount',
        'riskDomainCount' => 'RiskDomainCount',
        'riskDstIPCount' => 'RiskDstIPCount',
        'subscribeAssetCount' => 'SubscribeAssetCount',
        'subscribeDomainCount' => 'SubscribeDomainCount',
        'subscribeDstIPCount' => 'SubscribeDstIPCount',
        'totalAssetCount' => 'TotalAssetCount',
        'totalDomainCount' => 'TotalDomainCount',
        'totalDstIPCount' => 'TotalDstIPCount',
        'totalProtocolCount' => 'TotalProtocolCount',
        'uncoveredAclDomain' => 'UncoveredAclDomain',
        'uncoveredAclDstIP' => 'UncoveredAclDstIP',
        'unknownProtocolRadio' => 'UnknownProtocolRadio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ignoreAssetCount) {
            $res['IgnoreAssetCount'] = $this->ignoreAssetCount;
        }

        if (null !== $this->ignoreDomainCount) {
            $res['IgnoreDomainCount'] = $this->ignoreDomainCount;
        }

        if (null !== $this->ignoreDstIPCount) {
            $res['IgnoreDstIPCount'] = $this->ignoreDstIPCount;
        }

        if (null !== $this->privateRiskAssetCount) {
            $res['PrivateRiskAssetCount'] = $this->privateRiskAssetCount;
        }

        if (null !== $this->privateTotalAssetCount) {
            $res['PrivateTotalAssetCount'] = $this->privateTotalAssetCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskAssetCount) {
            $res['RiskAssetCount'] = $this->riskAssetCount;
        }

        if (null !== $this->riskDomainCount) {
            $res['RiskDomainCount'] = $this->riskDomainCount;
        }

        if (null !== $this->riskDstIPCount) {
            $res['RiskDstIPCount'] = $this->riskDstIPCount;
        }

        if (null !== $this->subscribeAssetCount) {
            $res['SubscribeAssetCount'] = $this->subscribeAssetCount;
        }

        if (null !== $this->subscribeDomainCount) {
            $res['SubscribeDomainCount'] = $this->subscribeDomainCount;
        }

        if (null !== $this->subscribeDstIPCount) {
            $res['SubscribeDstIPCount'] = $this->subscribeDstIPCount;
        }

        if (null !== $this->totalAssetCount) {
            $res['TotalAssetCount'] = $this->totalAssetCount;
        }

        if (null !== $this->totalDomainCount) {
            $res['TotalDomainCount'] = $this->totalDomainCount;
        }

        if (null !== $this->totalDstIPCount) {
            $res['TotalDstIPCount'] = $this->totalDstIPCount;
        }

        if (null !== $this->totalProtocolCount) {
            $res['TotalProtocolCount'] = $this->totalProtocolCount;
        }

        if (null !== $this->uncoveredAclDomain) {
            $res['UncoveredAclDomain'] = $this->uncoveredAclDomain;
        }

        if (null !== $this->uncoveredAclDstIP) {
            $res['UncoveredAclDstIP'] = $this->uncoveredAclDstIP;
        }

        if (null !== $this->unknownProtocolRadio) {
            $res['UnknownProtocolRadio'] = $this->unknownProtocolRadio;
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
        if (isset($map['IgnoreAssetCount'])) {
            $model->ignoreAssetCount = $map['IgnoreAssetCount'];
        }

        if (isset($map['IgnoreDomainCount'])) {
            $model->ignoreDomainCount = $map['IgnoreDomainCount'];
        }

        if (isset($map['IgnoreDstIPCount'])) {
            $model->ignoreDstIPCount = $map['IgnoreDstIPCount'];
        }

        if (isset($map['PrivateRiskAssetCount'])) {
            $model->privateRiskAssetCount = $map['PrivateRiskAssetCount'];
        }

        if (isset($map['PrivateTotalAssetCount'])) {
            $model->privateTotalAssetCount = $map['PrivateTotalAssetCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskAssetCount'])) {
            $model->riskAssetCount = $map['RiskAssetCount'];
        }

        if (isset($map['RiskDomainCount'])) {
            $model->riskDomainCount = $map['RiskDomainCount'];
        }

        if (isset($map['RiskDstIPCount'])) {
            $model->riskDstIPCount = $map['RiskDstIPCount'];
        }

        if (isset($map['SubscribeAssetCount'])) {
            $model->subscribeAssetCount = $map['SubscribeAssetCount'];
        }

        if (isset($map['SubscribeDomainCount'])) {
            $model->subscribeDomainCount = $map['SubscribeDomainCount'];
        }

        if (isset($map['SubscribeDstIPCount'])) {
            $model->subscribeDstIPCount = $map['SubscribeDstIPCount'];
        }

        if (isset($map['TotalAssetCount'])) {
            $model->totalAssetCount = $map['TotalAssetCount'];
        }

        if (isset($map['TotalDomainCount'])) {
            $model->totalDomainCount = $map['TotalDomainCount'];
        }

        if (isset($map['TotalDstIPCount'])) {
            $model->totalDstIPCount = $map['TotalDstIPCount'];
        }

        if (isset($map['TotalProtocolCount'])) {
            $model->totalProtocolCount = $map['TotalProtocolCount'];
        }

        if (isset($map['UncoveredAclDomain'])) {
            $model->uncoveredAclDomain = $map['UncoveredAclDomain'];
        }

        if (isset($map['UncoveredAclDstIP'])) {
            $model->uncoveredAclDstIP = $map['UncoveredAclDstIP'];
        }

        if (isset($map['UnknownProtocolRadio'])) {
            $model->unknownProtocolRadio = $map['UnknownProtocolRadio'];
        }

        return $model;
    }
}
