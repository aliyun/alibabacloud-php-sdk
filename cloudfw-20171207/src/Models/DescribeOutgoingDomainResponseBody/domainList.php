<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponseBody\domainList\tagList;
use AlibabaCloud\Tea\Model;

class domainList extends Model
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
     * @var string
     */
    public $addressGroupName;

    /**
     * @var string
     */
    public $addressGroupUUID;

    /**
     * @var string
     */
    public $business;

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
    public $domain;

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
    public $organization;

    /**
     * @var int
     */
    public $outBytes;

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
        'aclCoverage'        => 'AclCoverage',
        'aclRecommendDetail' => 'AclRecommendDetail',
        'aclStatus'          => 'AclStatus',
        'addressGroupName'   => 'AddressGroupName',
        'addressGroupUUID'   => 'AddressGroupUUID',
        'business'           => 'Business',
        'categoryClassId'    => 'CategoryClassId',
        'categoryId'         => 'CategoryId',
        'categoryName'       => 'CategoryName',
        'domain'             => 'Domain',
        'groupName'          => 'GroupName',
        'hasAcl'             => 'HasAcl',
        'hasAclRecommend'    => 'HasAclRecommend',
        'inBytes'            => 'InBytes',
        'isMarkNormal'       => 'IsMarkNormal',
        'organization'       => 'Organization',
        'outBytes'           => 'OutBytes',
        'ruleId'             => 'RuleId',
        'ruleName'           => 'RuleName',
        'securityReason'     => 'SecurityReason',
        'securitySuggest'    => 'SecuritySuggest',
        'sessionCount'       => 'SessionCount',
        'tagList'            => 'TagList',
        'totalBytes'         => 'TotalBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->addressGroupName) {
            $res['AddressGroupName'] = $this->addressGroupName;
        }
        if (null !== $this->addressGroupUUID) {
            $res['AddressGroupUUID'] = $this->addressGroupUUID;
        }
        if (null !== $this->business) {
            $res['Business'] = $this->business;
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (null !== $this->organization) {
            $res['Organization'] = $this->organization;
        }
        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
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
            $res['TagList'] = [];
            if (null !== $this->tagList && \is_array($this->tagList)) {
                $n = 0;
                foreach ($this->tagList as $item) {
                    $res['TagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainList
     */
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
        if (isset($map['AddressGroupName'])) {
            $model->addressGroupName = $map['AddressGroupName'];
        }
        if (isset($map['AddressGroupUUID'])) {
            $model->addressGroupUUID = $map['AddressGroupUUID'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
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
        if (isset($map['Organization'])) {
            $model->organization = $map['Organization'];
        }
        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
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
                $n              = 0;
                foreach ($map['TagList'] as $item) {
                    $model->tagList[$n++] = null !== $item ? tagList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        return $model;
    }
}
