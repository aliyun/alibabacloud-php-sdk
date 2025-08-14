<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallControlPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class policys extends Model
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
     * @var int
     */
    public $createTime;

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
    public $destination;

    /**
     * @var string[]
     */
    public $destinationGroupCidrs;

    /**
     * @var string
     */
    public $destinationGroupType;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $dnsResult;

    /**
     * @var int
     */
    public $dnsResultTime;

    /**
     * @var int
     */
    public $domainResolveType;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $hitLastTime;

    /**
     * @var int
     */
    public $hitTimes;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var int
     */
    public $order;

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
     * @var string[]
     */
    public $sourceGroupCidrs;

    /**
     * @var string
     */
    public $sourceGroupType;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $spreadCnt;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'aclAction' => 'AclAction',
        'aclUuid' => 'AclUuid',
        'applicationNameList' => 'ApplicationNameList',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'destPort' => 'DestPort',
        'destPortGroup' => 'DestPortGroup',
        'destPortGroupPorts' => 'DestPortGroupPorts',
        'destPortType' => 'DestPortType',
        'destination' => 'Destination',
        'destinationGroupCidrs' => 'DestinationGroupCidrs',
        'destinationGroupType' => 'DestinationGroupType',
        'destinationType' => 'DestinationType',
        'dnsResult' => 'DnsResult',
        'dnsResultTime' => 'DnsResultTime',
        'domainResolveType' => 'DomainResolveType',
        'endTime' => 'EndTime',
        'hitLastTime' => 'HitLastTime',
        'hitTimes' => 'HitTimes',
        'modifyTime' => 'ModifyTime',
        'natGatewayId' => 'NatGatewayId',
        'order' => 'Order',
        'proto' => 'Proto',
        'release' => 'Release',
        'repeatDays' => 'RepeatDays',
        'repeatEndTime' => 'RepeatEndTime',
        'repeatStartTime' => 'RepeatStartTime',
        'repeatType' => 'RepeatType',
        'source' => 'Source',
        'sourceGroupCidrs' => 'SourceGroupCidrs',
        'sourceGroupType' => 'SourceGroupType',
        'sourceType' => 'SourceType',
        'spreadCnt' => 'SpreadCnt',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->applicationNameList)) {
            Model::validateArray($this->applicationNameList);
        }
        if (\is_array($this->destPortGroupPorts)) {
            Model::validateArray($this->destPortGroupPorts);
        }
        if (\is_array($this->destinationGroupCidrs)) {
            Model::validateArray($this->destinationGroupCidrs);
        }
        if (\is_array($this->repeatDays)) {
            Model::validateArray($this->repeatDays);
        }
        if (\is_array($this->sourceGroupCidrs)) {
            Model::validateArray($this->sourceGroupCidrs);
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->destPortGroupPorts) {
            if (\is_array($this->destPortGroupPorts)) {
                $res['DestPortGroupPorts'] = [];
                $n1 = 0;
                foreach ($this->destPortGroupPorts as $item1) {
                    $res['DestPortGroupPorts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destPortType) {
            $res['DestPortType'] = $this->destPortType;
        }

        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }

        if (null !== $this->destinationGroupCidrs) {
            if (\is_array($this->destinationGroupCidrs)) {
                $res['DestinationGroupCidrs'] = [];
                $n1 = 0;
                foreach ($this->destinationGroupCidrs as $item1) {
                    $res['DestinationGroupCidrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destinationGroupType) {
            $res['DestinationGroupType'] = $this->destinationGroupType;
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->dnsResult) {
            $res['DnsResult'] = $this->dnsResult;
        }

        if (null !== $this->dnsResultTime) {
            $res['DnsResultTime'] = $this->dnsResultTime;
        }

        if (null !== $this->domainResolveType) {
            $res['DomainResolveType'] = $this->domainResolveType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->hitLastTime) {
            $res['HitLastTime'] = $this->hitLastTime;
        }

        if (null !== $this->hitTimes) {
            $res['HitTimes'] = $this->hitTimes;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
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

        if (null !== $this->sourceGroupCidrs) {
            if (\is_array($this->sourceGroupCidrs)) {
                $res['SourceGroupCidrs'] = [];
                $n1 = 0;
                foreach ($this->sourceGroupCidrs as $item1) {
                    $res['SourceGroupCidrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceGroupType) {
            $res['SourceGroupType'] = $this->sourceGroupType;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->spreadCnt) {
            $res['SpreadCnt'] = $this->spreadCnt;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['DestPortGroupPorts'])) {
            if (!empty($map['DestPortGroupPorts'])) {
                $model->destPortGroupPorts = [];
                $n1 = 0;
                foreach ($map['DestPortGroupPorts'] as $item1) {
                    $model->destPortGroupPorts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestPortType'])) {
            $model->destPortType = $map['DestPortType'];
        }

        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }

        if (isset($map['DestinationGroupCidrs'])) {
            if (!empty($map['DestinationGroupCidrs'])) {
                $model->destinationGroupCidrs = [];
                $n1 = 0;
                foreach ($map['DestinationGroupCidrs'] as $item1) {
                    $model->destinationGroupCidrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestinationGroupType'])) {
            $model->destinationGroupType = $map['DestinationGroupType'];
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['DnsResult'])) {
            $model->dnsResult = $map['DnsResult'];
        }

        if (isset($map['DnsResultTime'])) {
            $model->dnsResultTime = $map['DnsResultTime'];
        }

        if (isset($map['DomainResolveType'])) {
            $model->domainResolveType = $map['DomainResolveType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['HitLastTime'])) {
            $model->hitLastTime = $map['HitLastTime'];
        }

        if (isset($map['HitTimes'])) {
            $model->hitTimes = $map['HitTimes'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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

        if (isset($map['SourceGroupCidrs'])) {
            if (!empty($map['SourceGroupCidrs'])) {
                $model->sourceGroupCidrs = [];
                $n1 = 0;
                foreach ($map['SourceGroupCidrs'] as $item1) {
                    $model->sourceGroupCidrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceGroupType'])) {
            $model->sourceGroupType = $map['SourceGroupType'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SpreadCnt'])) {
            $model->spreadCnt = $map['SpreadCnt'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
