<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricConsortiumRequest\organization;
use AlibabaCloud\Tea\Model;

class CreateFabricConsortiumRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example all
     *
     * @var string
     */
    public $channelPolicy;

    /**
     * @example some
     *
     * @var string
     */
    public $consortiumDescription;

    /**
     * @description This parameter is required.
     *
     * @example aaaaa
     *
     * @var string
     */
    public $consortiumName;

    /**
     * @description This parameter is required.
     *
     * @example helloworld
     *
     * @var string
     */
    public $domain;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $location;

    /**
     * @description This parameter is required.
     *
     * @example etcdraft
     *
     * @var string
     */
    public $ordererType;

    /**
     * @example 2
     *
     * @var int
     */
    public $orderersCount;

    /**
     * @var organization[]
     */
    public $organization;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $paymentDuration;

    /**
     * @description This parameter is required.
     *
     * @example month
     *
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @example 2
     *
     * @var int
     */
    public $peersCount;

    /**
     * @description This parameter is required.
     *
     * @example basic
     *
     * @var string
     */
    public $specName;

    /**
     * @example random
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'channelPolicy'         => 'ChannelPolicy',
        'consortiumDescription' => 'ConsortiumDescription',
        'consortiumName'        => 'ConsortiumName',
        'domain'                => 'Domain',
        'location'              => 'Location',
        'ordererType'           => 'OrdererType',
        'orderersCount'         => 'OrderersCount',
        'organization'          => 'Organization',
        'paymentDuration'       => 'PaymentDuration',
        'paymentDurationUnit'   => 'PaymentDurationUnit',
        'peersCount'            => 'PeersCount',
        'specName'              => 'SpecName',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelPolicy) {
            $res['ChannelPolicy'] = $this->channelPolicy;
        }
        if (null !== $this->consortiumDescription) {
            $res['ConsortiumDescription'] = $this->consortiumDescription;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->ordererType) {
            $res['OrdererType'] = $this->ordererType;
        }
        if (null !== $this->orderersCount) {
            $res['OrderersCount'] = $this->orderersCount;
        }
        if (null !== $this->organization) {
            $res['Organization'] = [];
            if (null !== $this->organization && \is_array($this->organization)) {
                $n = 0;
                foreach ($this->organization as $item) {
                    $res['Organization'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->peersCount) {
            $res['PeersCount'] = $this->peersCount;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFabricConsortiumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelPolicy'])) {
            $model->channelPolicy = $map['ChannelPolicy'];
        }
        if (isset($map['ConsortiumDescription'])) {
            $model->consortiumDescription = $map['ConsortiumDescription'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OrdererType'])) {
            $model->ordererType = $map['OrdererType'];
        }
        if (isset($map['OrderersCount'])) {
            $model->orderersCount = $map['OrderersCount'];
        }
        if (isset($map['Organization'])) {
            if (!empty($map['Organization'])) {
                $model->organization = [];
                $n                   = 0;
                foreach ($map['Organization'] as $item) {
                    $model->organization[$n++] = null !== $item ? organization::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }
        if (isset($map['PeersCount'])) {
            $model->peersCount = $map['PeersCount'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
