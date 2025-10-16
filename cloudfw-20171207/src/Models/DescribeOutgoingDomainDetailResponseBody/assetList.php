<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainDetailResponseBody\assetList\tagList;

class assetList extends Model
{
    /**
     * @var string
     */
    public $aclCoverage;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var int
     */
    public $ipsHitCnt;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natGatewayName;

    /**
     * @var int
     */
    public $outBytes;

    /**
     * @var string
     */
    public $privateIP;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $resourceInstanceName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @var string
     */
    public $totalBytes;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aclCoverage' => 'AclCoverage',
        'domain' => 'Domain',
        'firstTime' => 'FirstTime',
        'inBytes' => 'InBytes',
        'ipsHitCnt' => 'IpsHitCnt',
        'lastTime' => 'LastTime',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayName' => 'NatGatewayName',
        'outBytes' => 'OutBytes',
        'privateIP' => 'PrivateIP',
        'publicIP' => 'PublicIP',
        'regionNo' => 'RegionNo',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceInstanceName' => 'ResourceInstanceName',
        'resourceType' => 'ResourceType',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'sessionCount' => 'SessionCount',
        'tagList' => 'TagList',
        'totalBytes' => 'TotalBytes',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclCoverage) {
            $res['AclCoverage'] = $this->aclCoverage;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->ipsHitCnt) {
            $res['IpsHitCnt'] = $this->ipsHitCnt;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayName) {
            $res['NatGatewayName'] = $this->natGatewayName;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
        }

        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }

        if (null !== $this->resourceInstanceName) {
            $res['ResourceInstanceName'] = $this->resourceInstanceName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
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

        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AclCoverage'])) {
            $model->aclCoverage = $map['AclCoverage'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['IpsHitCnt'])) {
            $model->ipsHitCnt = $map['IpsHitCnt'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayName'])) {
            $model->natGatewayName = $map['NatGatewayName'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
        }

        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }

        if (isset($map['ResourceInstanceName'])) {
            $model->resourceInstanceName = $map['ResourceInstanceName'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
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

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
