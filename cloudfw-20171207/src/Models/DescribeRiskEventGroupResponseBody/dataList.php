<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\IPLocationInfo;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\resourcePrivateIPList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\vpcDstInfo;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\vpcSrcInfo;

class dataList extends Model
{
    /**
     * @var string
     */
    public $attackApp;

    /**
     * @var int
     */
    public $attackType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var int
     */
    public $firstEventTime;

    /**
     * @var IPLocationInfo
     */
    public $IPLocationInfo;

    /**
     * @var int
     */
    public $lastEventTime;

    /**
     * @var resourcePrivateIPList[]
     */
    public $resourcePrivateIPList;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleResult;

    /**
     * @var int
     */
    public $ruleSource;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var string
     */
    public $srcIPTag;

    /**
     * @var string[]
     */
    public $srcPrivateIPList;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var vpcDstInfo
     */
    public $vpcDstInfo;

    /**
     * @var vpcSrcInfo
     */
    public $vpcSrcInfo;

    /**
     * @var int
     */
    public $vulLevel;
    protected $_name = [
        'attackApp' => 'AttackApp',
        'attackType' => 'AttackType',
        'description' => 'Description',
        'direction' => 'Direction',
        'dstIP' => 'DstIP',
        'eventCount' => 'EventCount',
        'eventId' => 'EventId',
        'eventName' => 'EventName',
        'firstEventTime' => 'FirstEventTime',
        'IPLocationInfo' => 'IPLocationInfo',
        'lastEventTime' => 'LastEventTime',
        'resourcePrivateIPList' => 'ResourcePrivateIPList',
        'resourceType' => 'ResourceType',
        'ruleId' => 'RuleId',
        'ruleResult' => 'RuleResult',
        'ruleSource' => 'RuleSource',
        'srcIP' => 'SrcIP',
        'srcIPTag' => 'SrcIPTag',
        'srcPrivateIPList' => 'SrcPrivateIPList',
        'tag' => 'Tag',
        'vpcDstInfo' => 'VpcDstInfo',
        'vpcSrcInfo' => 'VpcSrcInfo',
        'vulLevel' => 'VulLevel',
    ];

    public function validate()
    {
        if (null !== $this->IPLocationInfo) {
            $this->IPLocationInfo->validate();
        }
        if (\is_array($this->resourcePrivateIPList)) {
            Model::validateArray($this->resourcePrivateIPList);
        }
        if (\is_array($this->srcPrivateIPList)) {
            Model::validateArray($this->srcPrivateIPList);
        }
        if (null !== $this->vpcDstInfo) {
            $this->vpcDstInfo->validate();
        }
        if (null !== $this->vpcSrcInfo) {
            $this->vpcSrcInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['IPLocationInfo'] = null !== $this->IPLocationInfo ? $this->IPLocationInfo->toArray($noStream) : $this->IPLocationInfo;
        }

        if (null !== $this->lastEventTime) {
            $res['LastEventTime'] = $this->lastEventTime;
        }

        if (null !== $this->resourcePrivateIPList) {
            if (\is_array($this->resourcePrivateIPList)) {
                $res['ResourcePrivateIPList'] = [];
                $n1 = 0;
                foreach ($this->resourcePrivateIPList as $item1) {
                    $res['ResourcePrivateIPList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->srcPrivateIPList)) {
                $res['SrcPrivateIPList'] = [];
                $n1 = 0;
                foreach ($this->srcPrivateIPList as $item1) {
                    $res['SrcPrivateIPList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->vpcDstInfo) {
            $res['VpcDstInfo'] = null !== $this->vpcDstInfo ? $this->vpcDstInfo->toArray($noStream) : $this->vpcDstInfo;
        }

        if (null !== $this->vpcSrcInfo) {
            $res['VpcSrcInfo'] = null !== $this->vpcSrcInfo ? $this->vpcSrcInfo->toArray($noStream) : $this->vpcSrcInfo;
        }

        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
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
                $n1 = 0;
                foreach ($map['ResourcePrivateIPList'] as $item1) {
                    $model->resourcePrivateIPList[$n1++] = resourcePrivateIPList::fromMap($item1);
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
                $model->srcPrivateIPList = [];
                $n1 = 0;
                foreach ($map['SrcPrivateIPList'] as $item1) {
                    $model->srcPrivateIPList[$n1++] = $item1;
                }
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
