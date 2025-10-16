<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls\acl\addresses;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls\acl\tagList;

class acl extends Model
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
    public $addressList;

    /**
     * @var int
     */
    public $addressListCount;

    /**
     * @var addresses[]
     */
    public $addresses;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string[]
     */
    public $applicationNameList;

    /**
     * @var int
     */
    public $autoAddTagEcs;

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
    public $direction;

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
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $groupUuid;

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
    public $ipVersion;

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
     * @var int
     */
    public $referenceCount;

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
     * @var int
     */
    public $spreadCnt;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @var string
     */
    public $tagRelation;

    /**
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'aclAction' => 'AclAction',
        'aclUuid' => 'AclUuid',
        'addressList' => 'AddressList',
        'addressListCount' => 'AddressListCount',
        'addresses' => 'Addresses',
        'applicationId' => 'ApplicationId',
        'applicationName' => 'ApplicationName',
        'applicationNameList' => 'ApplicationNameList',
        'autoAddTagEcs' => 'AutoAddTagEcs',
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
        'direction' => 'Direction',
        'dnsResult' => 'DnsResult',
        'dnsResultTime' => 'DnsResultTime',
        'domainResolveType' => 'DomainResolveType',
        'endTime' => 'EndTime',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'groupUuid' => 'GroupUuid',
        'hitLastTime' => 'HitLastTime',
        'hitTimes' => 'HitTimes',
        'ipVersion' => 'IpVersion',
        'modifyTime' => 'ModifyTime',
        'natGatewayId' => 'NatGatewayId',
        'order' => 'Order',
        'proto' => 'Proto',
        'referenceCount' => 'ReferenceCount',
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
        'tagList' => 'TagList',
        'tagRelation' => 'TagRelation',
        'vpcFirewallId' => 'VpcFirewallId',
    ];

    public function validate()
    {
        if (\is_array($this->addressList)) {
            Model::validateArray($this->addressList);
        }
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
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
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
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

        if (null !== $this->addressList) {
            if (\is_array($this->addressList)) {
                $res['AddressList'] = [];
                $n1 = 0;
                foreach ($this->addressList as $item1) {
                    $res['AddressList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->addressListCount) {
            $res['AddressListCount'] = $this->addressListCount;
        }

        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['Addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['Addresses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
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

        if (null !== $this->autoAddTagEcs) {
            $res['AutoAddTagEcs'] = $this->autoAddTagEcs;
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

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
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

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
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

        if (null !== $this->referenceCount) {
            $res['ReferenceCount'] = $this->referenceCount;
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

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagRelation) {
            $res['TagRelation'] = $this->tagRelation;
        }

        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
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

        if (isset($map['AddressList'])) {
            if (!empty($map['AddressList'])) {
                $model->addressList = [];
                $n1 = 0;
                foreach ($map['AddressList'] as $item1) {
                    $model->addressList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AddressListCount'])) {
            $model->addressListCount = $map['AddressListCount'];
        }

        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['Addresses'] as $item1) {
                    $model->addresses[$n1] = addresses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
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

        if (isset($map['AutoAddTagEcs'])) {
            $model->autoAddTagEcs = $map['AutoAddTagEcs'];
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

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
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

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
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

        if (isset($map['ReferenceCount'])) {
            $model->referenceCount = $map['ReferenceCount'];
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

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1] = tagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TagRelation'])) {
            $model->tagRelation = $map['TagRelation'];
        }

        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
