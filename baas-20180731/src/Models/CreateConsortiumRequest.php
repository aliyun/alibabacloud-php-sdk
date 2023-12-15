<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\SDK\Baas\V20180731\Models\CreateConsortiumRequest\organization;
use AlibabaCloud\Tea\Model;

class CreateConsortiumRequest extends Model
{
    /**
     * @example Any
     *
     * @var string
     */
    public $channelPolicy;

    /**
     * @example some
     *
     * @var string
     */
    public $description;

    /**
     * @example helloworld
     *
     * @var string
     */
    public $domain;

    /**
     * @example 24
     *
     * @var int
     */
    public $duration;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @example helloworld
     *
     * @var string
     */
    public $name;

    /**
     * @example Kafka
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
     * @example 2
     *
     * @var int
     */
    public $peersCount;

    /**
     * @example 12
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @example basic
     *
     * @var string
     */
    public $specName;

    /**
     * @example zone
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'channelPolicy' => 'ChannelPolicy',
        'description'   => 'Description',
        'domain'        => 'Domain',
        'duration'      => 'Duration',
        'location'      => 'Location',
        'majorVersion'  => 'MajorVersion',
        'name'          => 'Name',
        'ordererType'   => 'OrdererType',
        'orderersCount' => 'OrderersCount',
        'organization'  => 'Organization',
        'peersCount'    => 'PeersCount',
        'pricingCycle'  => 'PricingCycle',
        'specName'      => 'SpecName',
        'zoneId'        => 'ZoneId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->peersCount) {
            $res['PeersCount'] = $this->peersCount;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
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
     * @return CreateConsortiumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelPolicy'])) {
            $model->channelPolicy = $map['ChannelPolicy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['PeersCount'])) {
            $model->peersCount = $map['PeersCount'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
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
