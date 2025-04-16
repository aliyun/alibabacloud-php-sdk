<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList\addressGroupList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList\applicationPortList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList\tagList;

class dstIPList extends Model
{
    /**
     * @var string
     */
    public $aclCoverage;

    /**
     * @var string
     */
    public $aclRecommendDetail;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var addressGroupList[]
     */
    public $addressGroupList;

    /**
     * @var applicationPortList[]
     */
    public $applicationPortList;

    /**
     * @var int
     */
    public $assetCount;

    /**
     * @var string
     */
    public $categoryClassId;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $hasAcl;

    /**
     * @var bool
     */
    public $hasAclRecommend;

    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var bool
     */
    public $isMarkNormal;

    /**
     * @var string
     */
    public $locationName;

    /**
     * @var int
     */
    public $outBytes;

    /**
     * @var int
     */
    public $privateAssetCount;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $securityReason;

    /**
     * @var string
     */
    public $securitySuggest;

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
    protected $_name = [
        'aclCoverage' => 'AclCoverage',
        'aclRecommendDetail' => 'AclRecommendDetail',
        'aclStatus' => 'AclStatus',
        'addressGroupList' => 'AddressGroupList',
        'applicationPortList' => 'ApplicationPortList',
        'assetCount' => 'AssetCount',
        'categoryClassId' => 'CategoryClassId',
        'categoryId' => 'CategoryId',
        'categoryName' => 'CategoryName',
        'dstIP' => 'DstIP',
        'groupName' => 'GroupName',
        'hasAcl' => 'HasAcl',
        'hasAclRecommend' => 'HasAclRecommend',
        'inBytes' => 'InBytes',
        'isMarkNormal' => 'IsMarkNormal',
        'locationName' => 'LocationName',
        'outBytes' => 'OutBytes',
        'privateAssetCount' => 'PrivateAssetCount',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'securityReason' => 'SecurityReason',
        'securitySuggest' => 'SecuritySuggest',
        'sessionCount' => 'SessionCount',
        'tagList' => 'TagList',
        'totalBytes' => 'TotalBytes',
    ];

    public function validate()
    {
        if (\is_array($this->addressGroupList)) {
            Model::validateArray($this->addressGroupList);
        }
        if (\is_array($this->applicationPortList)) {
            Model::validateArray($this->applicationPortList);
        }
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

        if (null !== $this->aclRecommendDetail) {
            $res['AclRecommendDetail'] = $this->aclRecommendDetail;
        }

        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }

        if (null !== $this->addressGroupList) {
            if (\is_array($this->addressGroupList)) {
                $res['AddressGroupList'] = [];
                $n1 = 0;
                foreach ($this->addressGroupList as $item1) {
                    $res['AddressGroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->applicationPortList) {
            if (\is_array($this->applicationPortList)) {
                $res['ApplicationPortList'] = [];
                $n1 = 0;
                foreach ($this->applicationPortList as $item1) {
                    $res['ApplicationPortList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->assetCount) {
            $res['AssetCount'] = $this->assetCount;
        }

        if (null !== $this->categoryClassId) {
            $res['CategoryClassId'] = $this->categoryClassId;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->hasAcl) {
            $res['HasAcl'] = $this->hasAcl;
        }

        if (null !== $this->hasAclRecommend) {
            $res['HasAclRecommend'] = $this->hasAclRecommend;
        }

        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->isMarkNormal) {
            $res['IsMarkNormal'] = $this->isMarkNormal;
        }

        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->privateAssetCount) {
            $res['PrivateAssetCount'] = $this->privateAssetCount;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->securityReason) {
            $res['SecurityReason'] = $this->securityReason;
        }

        if (null !== $this->securitySuggest) {
            $res['SecuritySuggest'] = $this->securitySuggest;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
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

        if (isset($map['AclRecommendDetail'])) {
            $model->aclRecommendDetail = $map['AclRecommendDetail'];
        }

        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }

        if (isset($map['AddressGroupList'])) {
            if (!empty($map['AddressGroupList'])) {
                $model->addressGroupList = [];
                $n1 = 0;
                foreach ($map['AddressGroupList'] as $item1) {
                    $model->addressGroupList[$n1++] = addressGroupList::fromMap($item1);
                }
            }
        }

        if (isset($map['ApplicationPortList'])) {
            if (!empty($map['ApplicationPortList'])) {
                $model->applicationPortList = [];
                $n1 = 0;
                foreach ($map['ApplicationPortList'] as $item1) {
                    $model->applicationPortList[$n1++] = applicationPortList::fromMap($item1);
                }
            }
        }

        if (isset($map['AssetCount'])) {
            $model->assetCount = $map['AssetCount'];
        }

        if (isset($map['CategoryClassId'])) {
            $model->categoryClassId = $map['CategoryClassId'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['HasAcl'])) {
            $model->hasAcl = $map['HasAcl'];
        }

        if (isset($map['HasAclRecommend'])) {
            $model->hasAclRecommend = $map['HasAclRecommend'];
        }

        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['IsMarkNormal'])) {
            $model->isMarkNormal = $map['IsMarkNormal'];
        }

        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['PrivateAssetCount'])) {
            $model->privateAssetCount = $map['PrivateAssetCount'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SecurityReason'])) {
            $model->securityReason = $map['SecurityReason'];
        }

        if (isset($map['SecuritySuggest'])) {
            $model->securitySuggest = $map['SecuritySuggest'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1++] = tagList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        return $model;
    }
}
