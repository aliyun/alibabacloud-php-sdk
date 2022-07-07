<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponseBody\domainList\tagList;
use AlibabaCloud\Tea\Model;

class domainList extends Model
{
    /**
     * @description ACL覆盖
     *
     * @var string
     */
    public $aclCoverage;

    /**
     * @description ACL推荐内容
     *
     * @var string
     */
    public $aclRecommendDetail;

    /**
     * @description ACL状态
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description 地址簿名称
     *
     * @var string
     */
    public $addressGroupName;

    /**
     * @description 地址簿UUID
     *
     * @var string
     */
    public $addressGroupUUID;

    /**
     * @description 分类ID
     *
     * @var string
     */
    public $categoryId;

    /**
     * @description 分类名称
     *
     * @var string
     */
    public $categoryName;

    /**
     * @description 域名
     *
     * @var string
     */
    public $domain;

    /**
     * @description 规则中的组名称
     *
     * @var string
     */
    public $groupName;

    /**
     * @description 是否有ACL推荐规则
     *
     * @var bool
     */
    public $hasAclRecommend;

    /**
     * @description 入流量
     *
     * @var int
     */
    public $inBytes;

    /**
     * @description 是否正常
     *
     * @var bool
     */
    public $isMarkNormal;

    /**
     * @description 出流量
     *
     * @var int
     */
    public $outBytes;

    /**
     * @description ACL规则ID
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description 规则名称
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description 安全建议
     *
     * @var string
     */
    public $securitySuggest;

    /**
     * @description 会话数
     *
     * @var int
     */
    public $sessionCount;

    /**
     * @var tagList[]
     */
    public $tagList;
    protected $_name = [
        'aclCoverage'        => 'AclCoverage',
        'aclRecommendDetail' => 'AclRecommendDetail',
        'aclStatus'          => 'AclStatus',
        'addressGroupName'   => 'AddressGroupName',
        'addressGroupUUID'   => 'AddressGroupUUID',
        'categoryId'         => 'CategoryId',
        'categoryName'       => 'CategoryName',
        'domain'             => 'Domain',
        'groupName'          => 'GroupName',
        'hasAclRecommend'    => 'HasAclRecommend',
        'inBytes'            => 'InBytes',
        'isMarkNormal'       => 'IsMarkNormal',
        'outBytes'           => 'OutBytes',
        'ruleId'             => 'RuleId',
        'ruleName'           => 'RuleName',
        'securitySuggest'    => 'SecuritySuggest',
        'sessionCount'       => 'SessionCount',
        'tagList'            => 'TagList',
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
        if (null !== $this->hasAclRecommend) {
            $res['HasAclRecommend'] = $this->hasAclRecommend;
        }
        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }
        if (null !== $this->isMarkNormal) {
            $res['IsMarkNormal'] = $this->isMarkNormal;
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
        if (isset($map['HasAclRecommend'])) {
            $model->hasAclRecommend = $map['HasAclRecommend'];
        }
        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }
        if (isset($map['IsMarkNormal'])) {
            $model->isMarkNormal = $map['IsMarkNormal'];
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

        return $model;
    }
}
