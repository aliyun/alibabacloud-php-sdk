<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyNatFirewallControlPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $aclAction;

    /**
     * @var string
     */
    public $aclUuid;

    /**
     * @var string[]
     */
    public $applicationNameList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destPort;

    /**
     * @var string
     */
    public $destPortGroup;

    /**
     * @var string
     */
    public $destPortType;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $domainResolveType;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var string
     */
    public $release;

    /**
     * @var int[]
     */
    public $repeatDays;

    /**
     * @var string
     */
    public $repeatEndTime;

    /**
     * @var string
     */
    public $repeatStartTime;

    /**
     * @var string
     */
    public $repeatType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'aclAction' => 'AclAction',
        'aclUuid' => 'AclUuid',
        'applicationNameList' => 'ApplicationNameList',
        'description' => 'Description',
        'destPort' => 'DestPort',
        'destPortGroup' => 'DestPortGroup',
        'destPortType' => 'DestPortType',
        'destination' => 'Destination',
        'destinationType' => 'DestinationType',
        'direction' => 'Direction',
        'domainResolveType' => 'DomainResolveType',
        'endTime' => 'EndTime',
        'lang' => 'Lang',
        'natGatewayId' => 'NatGatewayId',
        'proto' => 'Proto',
        'release' => 'Release',
        'repeatDays' => 'RepeatDays',
        'repeatEndTime' => 'RepeatEndTime',
        'repeatStartTime' => 'RepeatStartTime',
        'repeatType' => 'RepeatType',
        'source' => 'Source',
        'sourceType' => 'SourceType',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->applicationNameList)) {
            Model::validateArray($this->applicationNameList);
        }
        if (\is_array($this->repeatDays)) {
            Model::validateArray($this->repeatDays);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclAction) {
            $res['AclAction'] = $this->aclAction;
        }

        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }

        if (null !== $this->applicationNameList) {
            if (\is_array($this->applicationNameList)) {
                $res['ApplicationNameList'] = [];
                $n1 = 0;
                foreach ($this->applicationNameList as $item1) {
                    $res['ApplicationNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destPort) {
            $res['DestPort'] = $this->destPort;
        }

        if (null !== $this->destPortGroup) {
            $res['DestPortGroup'] = $this->destPortGroup;
        }

        if (null !== $this->destPortType) {
            $res['DestPortType'] = $this->destPortType;
        }

        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->domainResolveType) {
            $res['DomainResolveType'] = $this->domainResolveType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }

        if (null !== $this->release) {
            $res['Release'] = $this->release;
        }

        if (null !== $this->repeatDays) {
            if (\is_array($this->repeatDays)) {
                $res['RepeatDays'] = [];
                $n1 = 0;
                foreach ($this->repeatDays as $item1) {
                    $res['RepeatDays'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repeatEndTime) {
            $res['RepeatEndTime'] = $this->repeatEndTime;
        }

        if (null !== $this->repeatStartTime) {
            $res['RepeatStartTime'] = $this->repeatStartTime;
        }

        if (null !== $this->repeatType) {
            $res['RepeatType'] = $this->repeatType;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }

        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }

        if (isset($map['ApplicationNameList'])) {
            if (!empty($map['ApplicationNameList'])) {
                $model->applicationNameList = [];
                $n1 = 0;
                foreach ($map['ApplicationNameList'] as $item1) {
                    $model->applicationNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestPort'])) {
            $model->destPort = $map['DestPort'];
        }

        if (isset($map['DestPortGroup'])) {
            $model->destPortGroup = $map['DestPortGroup'];
        }

        if (isset($map['DestPortType'])) {
            $model->destPortType = $map['DestPortType'];
        }

        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['DomainResolveType'])) {
            $model->domainResolveType = $map['DomainResolveType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }

        if (isset($map['Release'])) {
            $model->release = $map['Release'];
        }

        if (isset($map['RepeatDays'])) {
            if (!empty($map['RepeatDays'])) {
                $model->repeatDays = [];
                $n1 = 0;
                foreach ($map['RepeatDays'] as $item1) {
                    $model->repeatDays[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RepeatEndTime'])) {
            $model->repeatEndTime = $map['RepeatEndTime'];
        }

        if (isset($map['RepeatStartTime'])) {
            $model->repeatStartTime = $map['RepeatStartTime'];
        }

        if (isset($map['RepeatType'])) {
            $model->repeatType = $map['RepeatType'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
