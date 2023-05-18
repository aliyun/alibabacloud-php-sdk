<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class ListPolicyAttachmentsRequest extends Model
{
    /**
     * @description The language that is used to return the description of the system policy. Valid values:
     *
     *   en: English
     *   zh-CN: Chinese
     *   ja: Japanese
     *
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Valid values: 1 to 100. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the policy.
     *
     * The name must be 1 to 128 characters in length and can contain letters, digits, and hyphens (-).
     * @example AdministratorAccess
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The type of the policy. If you do not specify this parameter, the system lists all types of policies. Valid values:
     *
     *   Custom: custom policy
     *   System: system policy
     *
     * @example System
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The name of the object to which the policy is attached.
     *
     * @example alice@demo.onaliyun.com
     *
     * @var string
     */
    public $principalName;

    /**
     * @description The type of the object to which the policy is attached. If you do not specify this parameter, the system lists all types of objects. Valid values:
     *
     *   IMSUser: RAM user
     *   IMSGroup: RAM user group
     *   ServiceRole: RAM role
     *
     * @example IMSUser
     *
     * @var string
     */
    public $principalType;

    /**
     * @description The ID of the resource group or the ID of the Alibaba Cloud account to which the resource group belongs. If you do not specify this parameter, the system lists all policy attachment records under the current account.
     *
     * @example rg-001
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'language'        => 'Language',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'policyName'      => 'PolicyName',
        'policyType'      => 'PolicyType',
        'principalName'   => 'PrincipalName',
        'principalType'   => 'PrincipalType',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyAttachmentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
