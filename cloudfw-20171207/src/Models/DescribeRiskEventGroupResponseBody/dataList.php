<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\IPLocationInfo;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\resourcePrivateIPList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\vpcDstInfo;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\vpcSrcInfo;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @description The name of the attacked application.
     *
     * @example MySql
     *
     * @var string
     */
    public $attackApp;

    /**
     * @description The attack type of the intrusion event. Valid values:
     *
     *   **1**: suspicious connection
     *   **2**: command execution
     *   **3**: brute-force attack
     *   **4**: scanning
     *   **5**: others
     *   **6**: information leak
     *   **7**: DoS attack
     *   **8**: buffer overflow attack
     *   **9**: web attack
     *   **10**: trojan backdoor
     *   **11**: computer worm
     *   **12**: mining
     *   **13**: reverse shell
     *
     * @example 1
     *
     * @var int
     */
    public $attackType;

    /**
     * @description The description of the intrusion event.
     *
     * @example Path traversal attacks are detected in the web access requests over HTTP.
     *
     * @var string
     */
    public $description;

    /**
     * @description The direction of the traffic for the intrusion event. Valid values:
     *
     *   **in**: inbound
     *   **out**: outbound
     *
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The destination IP address that is included in the intrusion event.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $dstIP;

    /**
     * @description The number of intrusion events.
     *
     * @example 100
     *
     * @var int
     */
    public $eventCount;

    /**
     * @description The ID of the intrusion event.
     *
     * @example 2b58efae-4c4b-4d96-9544-a586fb1f****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The name of the intrusion event.
     *
     * @example Path traversal attack
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The time when the intrusion event was first detected. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1534408189
     *
     * @var int
     */
    public $firstEventTime;

    /**
     * @description The geographical information about the IP address. The value is a struct that contains the following parameters: **CityId**, **CityName**, **CountryId**, and **CountryName**.\
     ****************
     * @var IPLocationInfo
     */
    public $IPLocationInfo;

    /**
     * @description The time when the intrusion event was last detected. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1534408267
     *
     * @var int
     */
    public $lastEventTime;

    /**
     * @description The information about the private IP address in the intrusion event. The value is an array that contains the following parameters: **RegionNo**, **ResourceInstanceId**, **ResourceInstanceName**, and **ResourcePrivateIP**.\
     ****************
     * @var resourcePrivateIPList[]
     */
    public $resourcePrivateIPList;

    /**
     * @description The type of the public IP address in the intrusion event. Valid values:
     *
     *   **EIP**: the elastic IP address (EIP)
     *   **EcsPublicIP**: the public IP address of an Elastic Compute Service (ECS) instance
     *   **EcsEIP**: the EIP of an ECS instance
     *   **NatPublicIP**: the public IP address of a NAT gateway
     *   **NatEIP**: the EIP of a NAT gateway
     *
     * @example EcsPublicIP
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the rule that is used to detect the intrusion event.
     *
     * @example 1000****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The status of the firewall. Valid values:
     *
     *   **1**: alerting
     *   **2**: blocking
     *
     * @example 2
     *
     * @var int
     */
    public $ruleResult;

    /**
     * @description The module of the rule that is used to detect the intrusion event. Valid values:
     *
     *   **1**: basic protection
     *   **2**: virtual patching
     *   **4**: threat intelligence
     *
     * @example 1
     *
     * @var int
     */
    public $ruleSource;

    /**
     * @description The source IP address that is included in the intrusion event.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $srcIP;

    /**
     * @description The tag added to the source IP address. The tag helps identify whether the source IP address is a back-to-origin IP address for a cloud service.
     *
     * @example WAF Back-to-origin Address
     *
     * @var string
     */
    public $srcIPTag;

    /**
     * @description An array that consists of the source private IP addresses in the intrusion event.
     *
     * @var string[]
     */
    public $srcPrivateIPList;

    /**
     * @description The tag added to the threat intelligence that is provided for major events.
     *
     * @example Threat intelligence provided for major events
     *
     * @var string
     */
    public $tag;

    /**
     * @description The information about the destination VPC of the intrusion event. The value is a struct that contains the following parameters: **EcsInstanceId**, **EcsInstanceName**, **NetworkInstanceId**, **NetworkInstanceName**, and **RegionNo**.\
     ********************
     * @var vpcDstInfo
     */
    public $vpcDstInfo;

    /**
     * @description The information about the source VPC of the intrusion event. The value is a struct that contains the following parameters: **EcsInstanceId**, **EcsInstanceName**, **NetworkInstanceId**, **NetworkInstanceName**, and **RegionNo**.\
     ********************
     * @var vpcSrcInfo
     */
    public $vpcSrcInfo;

    /**
     * @description The risk level of the intrusion event. Valid values:
     *
     *   **1**: low
     *   **2**: medium
     *   **3**: high
     *
     * @example 1
     *
     * @var int
     */
    public $vulLevel;
    protected $_name = [
        'attackApp'             => 'AttackApp',
        'attackType'            => 'AttackType',
        'description'           => 'Description',
        'direction'             => 'Direction',
        'dstIP'                 => 'DstIP',
        'eventCount'            => 'EventCount',
        'eventId'               => 'EventId',
        'eventName'             => 'EventName',
        'firstEventTime'        => 'FirstEventTime',
        'IPLocationInfo'        => 'IPLocationInfo',
        'lastEventTime'         => 'LastEventTime',
        'resourcePrivateIPList' => 'ResourcePrivateIPList',
        'resourceType'          => 'ResourceType',
        'ruleId'                => 'RuleId',
        'ruleResult'            => 'RuleResult',
        'ruleSource'            => 'RuleSource',
        'srcIP'                 => 'SrcIP',
        'srcIPTag'              => 'SrcIPTag',
        'srcPrivateIPList'      => 'SrcPrivateIPList',
        'tag'                   => 'Tag',
        'vpcDstInfo'            => 'VpcDstInfo',
        'vpcSrcInfo'            => 'VpcSrcInfo',
        'vulLevel'              => 'VulLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackApp) {
            $res['AttackApp'] = $this->attackApp;
        }
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }
        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->firstEventTime) {
            $res['FirstEventTime'] = $this->firstEventTime;
        }
        if (null !== $this->IPLocationInfo) {
            $res['IPLocationInfo'] = null !== $this->IPLocationInfo ? $this->IPLocationInfo->toMap() : null;
        }
        if (null !== $this->lastEventTime) {
            $res['LastEventTime'] = $this->lastEventTime;
        }
        if (null !== $this->resourcePrivateIPList) {
            $res['ResourcePrivateIPList'] = [];
            if (null !== $this->resourcePrivateIPList && \is_array($this->resourcePrivateIPList)) {
                $n = 0;
                foreach ($this->resourcePrivateIPList as $item) {
                    $res['ResourcePrivateIPList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleResult) {
            $res['RuleResult'] = $this->ruleResult;
        }
        if (null !== $this->ruleSource) {
            $res['RuleSource'] = $this->ruleSource;
        }
        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }
        if (null !== $this->srcIPTag) {
            $res['SrcIPTag'] = $this->srcIPTag;
        }
        if (null !== $this->srcPrivateIPList) {
            $res['SrcPrivateIPList'] = $this->srcPrivateIPList;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->vpcDstInfo) {
            $res['VpcDstInfo'] = null !== $this->vpcDstInfo ? $this->vpcDstInfo->toMap() : null;
        }
        if (null !== $this->vpcSrcInfo) {
            $res['VpcSrcInfo'] = null !== $this->vpcSrcInfo ? $this->vpcSrcInfo->toMap() : null;
        }
        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackApp'])) {
            $model->attackApp = $map['AttackApp'];
        }
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }
        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['FirstEventTime'])) {
            $model->firstEventTime = $map['FirstEventTime'];
        }
        if (isset($map['IPLocationInfo'])) {
            $model->IPLocationInfo = IPLocationInfo::fromMap($map['IPLocationInfo']);
        }
        if (isset($map['LastEventTime'])) {
            $model->lastEventTime = $map['LastEventTime'];
        }
        if (isset($map['ResourcePrivateIPList'])) {
            if (!empty($map['ResourcePrivateIPList'])) {
                $model->resourcePrivateIPList = [];
                $n                            = 0;
                foreach ($map['ResourcePrivateIPList'] as $item) {
                    $model->resourcePrivateIPList[$n++] = null !== $item ? resourcePrivateIPList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleResult'])) {
            $model->ruleResult = $map['RuleResult'];
        }
        if (isset($map['RuleSource'])) {
            $model->ruleSource = $map['RuleSource'];
        }
        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }
        if (isset($map['SrcIPTag'])) {
            $model->srcIPTag = $map['SrcIPTag'];
        }
        if (isset($map['SrcPrivateIPList'])) {
            if (!empty($map['SrcPrivateIPList'])) {
                $model->srcPrivateIPList = $map['SrcPrivateIPList'];
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['VpcDstInfo'])) {
            $model->vpcDstInfo = vpcDstInfo::fromMap($map['VpcDstInfo']);
        }
        if (isset($map['VpcSrcInfo'])) {
            $model->vpcSrcInfo = vpcSrcInfo::fromMap($map['VpcSrcInfo']);
        }
        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        return $model;
    }
}
