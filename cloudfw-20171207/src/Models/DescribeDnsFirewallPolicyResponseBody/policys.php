<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDnsFirewallPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class policys extends Model
{
    /**
     * @example accept
     *
     * @var string
     */
    public $aclAction;

    /**
     * @example 01281255-d220-4db1-8f4f-c4df221a****
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example x.x.x.x/32
     *
     * @var string
     */
    public $destination;

    /**
     * @var string[]
     */
    public $destinationAddrs;

    /**
     * @example ip
     *
     * @var string
     */
    public $destinationGroupType;

    /**
     * @example net
     *
     * @var string
     */
    public $destinationType;

    /**
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @example 1579261141
     *
     * @var int
     */
    public $hitLastTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $hitTimes;

    /**
     * @example 6
     *
     * @var int
     */
    public $ipVersion;

    /**
     * @example 110
     *
     * @var int
     */
    public $priority;

    /**
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @example 192.0.XX.XX/24
     *
     * @var string
     */
    public $source;

    /**
     * @var string[]
     */
    public $sourceAddrs;

    /**
     * @example ip
     *
     * @var string
     */
    public $sourceGroupType;

    /**
     * @example net
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'aclAction' => 'AclAction',
        'aclUuid' => 'AclUuid',
        'description' => 'Description',
        'destination' => 'Destination',
        'destinationAddrs' => 'DestinationAddrs',
        'destinationGroupType' => 'DestinationGroupType',
        'destinationType' => 'DestinationType',
        'direction' => 'Direction',
        'hitLastTime' => 'HitLastTime',
        'hitTimes' => 'HitTimes',
        'ipVersion' => 'IpVersion',
        'priority' => 'Priority',
        'release' => 'Release',
        'source' => 'Source',
        'sourceAddrs' => 'SourceAddrs',
        'sourceGroupType' => 'SourceGroupType',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclAction) {
            $res['AclAction'] = $this->aclAction;
        }
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationAddrs) {
            $res['DestinationAddrs'] = $this->destinationAddrs;
        }
        if (null !== $this->destinationGroupType) {
            $res['DestinationGroupType'] = $this->destinationGroupType;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->hitLastTime) {
            $res['HitLastTime'] = $this->hitLastTime;
        }
        if (null !== $this->hitTimes) {
            $res['HitTimes'] = $this->hitTimes;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->release) {
            $res['Release'] = $this->release;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceAddrs) {
            $res['SourceAddrs'] = $this->sourceAddrs;
        }
        if (null !== $this->sourceGroupType) {
            $res['SourceGroupType'] = $this->sourceGroupType;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationAddrs'])) {
            if (!empty($map['DestinationAddrs'])) {
                $model->destinationAddrs = $map['DestinationAddrs'];
            }
        }
        if (isset($map['DestinationGroupType'])) {
            $model->destinationGroupType = $map['DestinationGroupType'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['HitLastTime'])) {
            $model->hitLastTime = $map['HitLastTime'];
        }
        if (isset($map['HitTimes'])) {
            $model->hitTimes = $map['HitTimes'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Release'])) {
            $model->release = $map['Release'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceAddrs'])) {
            if (!empty($map['SourceAddrs'])) {
                $model->sourceAddrs = $map['SourceAddrs'];
            }
        }
        if (isset($map['SourceGroupType'])) {
            $model->sourceGroupType = $map['SourceGroupType'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
