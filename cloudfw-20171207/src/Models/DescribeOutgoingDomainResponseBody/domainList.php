<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponseBody\domainList\tagList;
use AlibabaCloud\Tea\Model;

class domainList extends Model
{
    /**
     * @description Indicates whether an access control policy is configured. Valid values:
     *
     *   **Uncovered**: no
     *   **FullCoverage**: yes
     *
     * @example Uncovered
     *
     * @var string
     */
    public $aclCoverage;

    /**
     * @description The suggestion in an access control policy.
     *
     * @example Allows the traffic.
     *
     * @var string
     */
    public $aclRecommendDetail;

    /**
     * @description The state of the access control policy. Valid values:
     *
     *   **normal**: healthy
     *   **abnormal**: unhealthy
     *
     * @example Normal
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The name of the address book.
     *
     * @example The address book for outbound connections
     *
     * @var string
     */
    public $addressGroupName;

    /**
     * @description The UUID of the address book.
     *
     * @example fdad-fdafa-dafa-dfa****
     *
     * @var string
     */
    public $addressGroupUUID;

    /**
     * @description The website service.
     *
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $business;

    /**
     * @description The type of the tag. Valid values:
     *
     *   **Suspicious**
     *   **Malicious**
     *   **Trusted**
     *
     * @example Trusted
     *
     * @var string
     */
    public $categoryClassId;

    /**
     * @description The type ID of the service to which the domain name belongs. Valid values:
     *
     *   **Aliyun**: Alibaba Cloud services
     *   **NotAliyun**: third-party services
     *
     * @example Aliyun
     *
     * @var string
     */
    public $categoryId;

    /**
     * @description The type of the service to which the domain name belongs. Valid values:
     *
     *   **Alibaba Cloud services**
     *   **Third-party services**
     *
     * @example Alibaba Cloud services
     *
     * @var string
     */
    public $categoryName;

    /**
     * @description The domain name in outbound connections.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The name of the group to which the access control policy belongs.
     *
     * @example Group of addresses in outbound connections
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Indicates whether an `access control policy` is configured for the domain name. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var string
     */
    public $hasAcl;

    /**
     * @description Indicates whether an access control policy is recommended. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $hasAclRecommend;

    /**
     * @description The volume of inbound traffic.
     *
     * @example 3214
     *
     * @var int
     */
    public $inBytes;

    /**
     * @description Indicates whether the domain name is marked as normal. Valid values:
     *
     *   **true**: normal
     *   **false**: abnormal
     *
     * @example true
     *
     * @var bool
     */
    public $isMarkNormal;

    /**
     * @description The name of the organization.
     *
     * @example Alibaba Cloud Computing Co., Ltd.
     *
     * @var string
     */
    public $organization;

    /**
     * @description The volume of outbound traffic.
     *
     * @example 4582
     *
     * @var int
     */
    public $outBytes;

    /**
     * @description The ID of the access control policy.
     *
     * @example add-dfadf-f****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the access control policy.
     *
     * @example Default rule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The reason why the domain name is secure.
     *
     * @example Intelligent policy: The destination domain name belongs to Alibaba Cloud Computing Co., Ltd. The domain name mainly provides services for Alibaba Cloud. No security risks are found, and you can add the domain name to the whitelist.
     *
     * @var string
     */
    public $securityReason;

    /**
     * @description The suggestion to handle the traffic of the domain name in outbound connections. Valid values:
     *
     *   **pass**: allow
     *   **alert**: monitor
     *   **drop**: deny
     *
     * @example pass
     *
     * @var string
     */
    public $securitySuggest;

    /**
     * @description The number of requests.
     *
     * @example 12
     *
     * @var int
     */
    public $sessionCount;

    /**
     * @description An array that consists of tags.
     *
     * @var tagList[]
     */
    public $tagList;

    /**
     * @description The total volume of traffic. Unit: bytes.
     *
     * @example 800
     *
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
