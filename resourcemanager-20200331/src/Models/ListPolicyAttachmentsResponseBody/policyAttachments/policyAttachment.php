<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyAttachmentsResponseBody\policyAttachments;

use AlibabaCloud\Tea\Model;

class policyAttachment extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $attachDate;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $principalType;
    protected $_name = [
        'description'     => 'Description',
        'resourceGroupId' => 'ResourceGroupId',
        'policyName'      => 'PolicyName',
        'principalName'   => 'PrincipalName',
        'attachDate'      => 'AttachDate',
        'policyType'      => 'PolicyType',
        'principalType'   => 'PrincipalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }

        return $model;
    }
}
