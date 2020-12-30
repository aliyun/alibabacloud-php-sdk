<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallControlPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class policys extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $destPortGroup;

    /**
     * @var string
     */
    public $aclUuid;

    /**
     * @var string[]
     */
    public $destPortGroupPorts;

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
     * @var int
     */
    public $hitTimes;

    /**
     * @var string[]
     */
    public $sourceGroupCidrs;

    /**
     * @var string
     */
    public $destPort;

    /**
     * @var string[]
     */
    public $destinationGroupCidrs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $aclAction;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $proto;
    protected $_name = [
        'direction'             => 'Direction',
        'destination'           => 'Destination',
        'order'                 => 'Order',
        'applicationName'       => 'ApplicationName',
        'sourceType'            => 'SourceType',
        'destPortGroup'         => 'DestPortGroup',
        'aclUuid'               => 'AclUuid',
        'destPortGroupPorts'    => 'DestPortGroupPorts',
        'destPortType'          => 'DestPortType',
        'source'                => 'Source',
        'destinationType'       => 'DestinationType',
        'hitTimes'              => 'HitTimes',
        'sourceGroupCidrs'      => 'SourceGroupCidrs',
        'destPort'              => 'DestPort',
        'destinationGroupCidrs' => 'DestinationGroupCidrs',
        'description'           => 'Description',
        'aclAction'             => 'AclAction',
        'applicationId'         => 'ApplicationId',
        'proto'                 => 'Proto',
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
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->destPortGroup) {
            $res['DestPortGroup'] = $this->destPortGroup;
        }
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->destPortGroupPorts) {
            $res['DestPortGroupPorts'] = $this->destPortGroupPorts;
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
        if (null !== $this->hitTimes) {
            $res['HitTimes'] = $this->hitTimes;
        }
        if (null !== $this->sourceGroupCidrs) {
            $res['SourceGroupCidrs'] = $this->sourceGroupCidrs;
        }
        if (null !== $this->destPort) {
            $res['DestPort'] = $this->destPort;
        }
        if (null !== $this->destinationGroupCidrs) {
            $res['DestinationGroupCidrs'] = $this->destinationGroupCidrs;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->aclAction) {
            $res['AclAction'] = $this->aclAction;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
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
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['DestPortGroup'])) {
            $model->destPortGroup = $map['DestPortGroup'];
        }
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['DestPortGroupPorts'])) {
            if (!empty($map['DestPortGroupPorts'])) {
                $model->destPortGroupPorts = $map['DestPortGroupPorts'];
            }
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
        if (isset($map['HitTimes'])) {
            $model->hitTimes = $map['HitTimes'];
        }
        if (isset($map['SourceGroupCidrs'])) {
            if (!empty($map['SourceGroupCidrs'])) {
                $model->sourceGroupCidrs = $map['SourceGroupCidrs'];
            }
        }
        if (isset($map['DestPort'])) {
            $model->destPort = $map['DestPort'];
        }
        if (isset($map['DestinationGroupCidrs'])) {
            if (!empty($map['DestinationGroupCidrs'])) {
                $model->destinationGroupCidrs = $map['DestinationGroupCidrs'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }

        return $model;
    }
}
