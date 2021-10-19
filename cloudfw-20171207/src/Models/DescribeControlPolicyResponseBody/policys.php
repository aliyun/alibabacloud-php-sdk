<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class policys extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var int
     */
    public $hitTimes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $sourceGroupType;

    /**
     * @var int
     */
    public $dnsResultTime;

    /**
     * @var string
     */
    public $dnsResult;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var string
     */
    public $destinationGroupType;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var int
     */
    public $hitLastTime;

    /**
     * @var string
     */
    public $destPortGroup;

    /**
     * @var string
     */
    public $aclUuid;

    /**
     * @var string
     */
    public $destPortType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $destPort;

    /**
     * @var int
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $aclAction;

    /**
     * @var string
     */
    public $release;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string[]
     */
    public $destinationGroupCidrs;

    /**
     * @var string[]
     */
    public $destPortGroupPorts;

    /**
     * @var string[]
     */
    public $sourceGroupCidrs;
    protected $_name = [
        'direction'             => 'Direction',
        'order'                 => 'Order',
        'sourceType'            => 'SourceType',
        'applicationName'       => 'ApplicationName',
        'hitTimes'              => 'HitTimes',
        'description'           => 'Description',
        'sourceGroupType'       => 'SourceGroupType',
        'dnsResultTime'         => 'DnsResultTime',
        'dnsResult'             => 'DnsResult',
        'proto'                 => 'Proto',
        'destinationGroupType'  => 'DestinationGroupType',
        'destination'           => 'Destination',
        'hitLastTime'           => 'HitLastTime',
        'destPortGroup'         => 'DestPortGroup',
        'aclUuid'               => 'AclUuid',
        'destPortType'          => 'DestPortType',
        'source'                => 'Source',
        'destinationType'       => 'DestinationType',
        'destPort'              => 'DestPort',
        'ipVersion'             => 'IpVersion',
        'aclAction'             => 'AclAction',
        'release'               => 'Release',
        'applicationId'         => 'ApplicationId',
        'destinationGroupCidrs' => 'DestinationGroupCidrs',
        'destPortGroupPorts'    => 'DestPortGroupPorts',
        'sourceGroupCidrs'      => 'SourceGroupCidrs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->hitTimes) {
            $res['HitTimes'] = $this->hitTimes;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->sourceGroupType) {
            $res['SourceGroupType'] = $this->sourceGroupType;
        }
        if (null !== $this->dnsResultTime) {
            $res['DnsResultTime'] = $this->dnsResultTime;
        }
        if (null !== $this->dnsResult) {
            $res['DnsResult'] = $this->dnsResult;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->destinationGroupType) {
            $res['DestinationGroupType'] = $this->destinationGroupType;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->hitLastTime) {
            $res['HitLastTime'] = $this->hitLastTime;
        }
        if (null !== $this->destPortGroup) {
            $res['DestPortGroup'] = $this->destPortGroup;
        }
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->destPortType) {
            $res['DestPortType'] = $this->destPortType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->destPort) {
            $res['DestPort'] = $this->destPort;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->aclAction) {
            $res['AclAction'] = $this->aclAction;
        }
        if (null !== $this->release) {
            $res['Release'] = $this->release;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->destinationGroupCidrs) {
            $res['DestinationGroupCidrs'] = $this->destinationGroupCidrs;
        }
        if (null !== $this->destPortGroupPorts) {
            $res['DestPortGroupPorts'] = $this->destPortGroupPorts;
        }
        if (null !== $this->sourceGroupCidrs) {
            $res['SourceGroupCidrs'] = $this->sourceGroupCidrs;
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['HitTimes'])) {
            $model->hitTimes = $map['HitTimes'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SourceGroupType'])) {
            $model->sourceGroupType = $map['SourceGroupType'];
        }
        if (isset($map['DnsResultTime'])) {
            $model->dnsResultTime = $map['DnsResultTime'];
        }
        if (isset($map['DnsResult'])) {
            $model->dnsResult = $map['DnsResult'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['DestinationGroupType'])) {
            $model->destinationGroupType = $map['DestinationGroupType'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['HitLastTime'])) {
            $model->hitLastTime = $map['HitLastTime'];
        }
        if (isset($map['DestPortGroup'])) {
            $model->destPortGroup = $map['DestPortGroup'];
        }
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['DestPortType'])) {
            $model->destPortType = $map['DestPortType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['DestPort'])) {
            $model->destPort = $map['DestPort'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }
        if (isset($map['Release'])) {
            $model->release = $map['Release'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['DestinationGroupCidrs'])) {
            if (!empty($map['DestinationGroupCidrs'])) {
                $model->destinationGroupCidrs = $map['DestinationGroupCidrs'];
            }
        }
        if (isset($map['DestPortGroupPorts'])) {
            if (!empty($map['DestPortGroupPorts'])) {
                $model->destPortGroupPorts = $map['DestPortGroupPorts'];
            }
        }
        if (isset($map['SourceGroupCidrs'])) {
            if (!empty($map['SourceGroupCidrs'])) {
                $model->sourceGroupCidrs = $map['SourceGroupCidrs'];
            }
        }

        return $model;
    }
}
