<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList\addressGroupList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList\applicationPortList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList\tagList;
use AlibabaCloud\Tea\Model;

class dstIPList extends Model
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
     * @description The suggestion to configure an access control policy.
     *
     * @example Allows the traffic.
     *
     * @var string
     */
    public $aclRecommendDetail;

    /**
     * @description The status of the access control policy. Valid values:
     *
     *   **normal**: healthy
     *   **Abnormal**: unhealthy
     *
     * @example Normal
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The information about the address book.
     *
     * @var addressGroupList[]
     */
    public $addressGroupList;

    /**
     * @description The application ports.
     *
     * @var applicationPortList[]
     */
    public $applicationPortList;

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
     * @description The ID of the service type. Valid values:
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
     * @description The type of the service to which the destination IP address belongs. Valid values:
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
     * @description The destination IP addresses in outbound connections.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $dstIP;

    /**
     * @description The name of the group to which the access control policy belongs.
     *
     * @example Rule_test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Indicates whether an access control policy is configured. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $hasAcl;

    /**
     * @description Indicates whether an access control policy is recommended. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $hasAclRecommend;

    /**
     * @description The inbound traffic. Unit: bytes.
     *
     * @example 472
     *
     * @var int
     */
    public $inBytes;

    /**
     * @description Indicates whether the destination IP address is added to a whitelist. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isMarkNormal;

    /**
     * @description The outbound traffic. Unit: bytes.
     *
     * @example 965
     *
     * @var int
     */
    public $outBytes;

    /**
     * @description The UUID of the access control policy.
     *
     * @example fadsfd-dfadf-df****
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
     *   **alert**: deny
     *   **drop**: monitor
     *
     * @example pass
     *
     * @var string
     */
    public $securitySuggest;

    /**
     * @description The number of requests.
     *
     * @example 4
     *
     * @var int
     */
    public $sessionCount;

    /**
     * @description The tags.
     *
     * @var tagList[]
     */
    public $tagList;

    /**
     * @description The total traffic. Unit: bytes
     *
     * @example 800
     *
     * @var string
     */
    public $totalBytes;
    protected $_name = [
        'aclCoverage'         => 'AclCoverage',
        'aclRecommendDetail'  => 'AclRecommendDetail',
        'aclStatus'           => 'AclStatus',
        'addressGroupList'    => 'AddressGroupList',
        'applicationPortList' => 'ApplicationPortList',
        'categoryClassId'     => 'CategoryClassId',
        'categoryId'          => 'CategoryId',
        'categoryName'        => 'CategoryName',
        'dstIP'               => 'DstIP',
        'groupName'           => 'GroupName',
        'hasAcl'              => 'HasAcl',
        'hasAclRecommend'     => 'HasAclRecommend',
        'inBytes'             => 'InBytes',
        'isMarkNormal'        => 'IsMarkNormal',
        'outBytes'            => 'OutBytes',
        'ruleId'              => 'RuleId',
        'ruleName'            => 'RuleName',
        'securityReason'      => 'SecurityReason',
        'securitySuggest'     => 'SecuritySuggest',
        'sessionCount'        => 'SessionCount',
        'tagList'             => 'TagList',
        'totalBytes'          => 'TotalBytes',
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
        if (null !== $this->addressGroupList) {
            $res['AddressGroupList'] = [];
            if (null !== $this->addressGroupList && \is_array($this->addressGroupList)) {
                $n = 0;
                foreach ($this->addressGroupList as $item) {
                    $res['AddressGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->applicationPortList) {
            $res['ApplicationPortList'] = [];
            if (null !== $this->applicationPortList && \is_array($this->applicationPortList)) {
                $n = 0;
                foreach ($this->applicationPortList as $item) {
                    $res['ApplicationPortList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return dstIPList
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
        if (isset($map['AddressGroupList'])) {
            if (!empty($map['AddressGroupList'])) {
                $model->addressGroupList = [];
                $n                       = 0;
                foreach ($map['AddressGroupList'] as $item) {
                    $model->addressGroupList[$n++] = null !== $item ? addressGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ApplicationPortList'])) {
            if (!empty($map['ApplicationPortList'])) {
                $model->applicationPortList = [];
                $n                          = 0;
                foreach ($map['ApplicationPortList'] as $item) {
                    $model->applicationPortList[$n++] = null !== $item ? applicationPortList::fromMap($item) : $item;
                }
            }
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
