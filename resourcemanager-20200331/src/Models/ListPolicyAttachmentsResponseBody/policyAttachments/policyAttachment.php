<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyAttachmentsResponseBody\policyAttachments;

use AlibabaCloud\Tea\Model;

class policyAttachment extends Model
{
    /**
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $attachDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @example AdministratorAccess
     *
     * @var string
     */
    public $policyName;

    /**
     * @example System
     *
     * @var string
     */
    public $policyType;

    /**
     * @example alice@demo.onaliyun.com
     *
     * @var string
     */
    public $principalName;

    /**
     * @example IMSUser
     *
     * @var string
     */
    public $principalType;

    /**
     * @example rg-9gLOoK****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'attachDate'      => 'AttachDate',
        'description'     => 'Description',
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
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return policyAttachment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
