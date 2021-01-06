<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyAttachmentsResponse\policyAttachments;

use AlibabaCloud\Tea\Model;

class policyAttachment extends Model
{
    /**
     * @var string
     */
    public $policyType;

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
    public $attachDate;

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
    public $principalType;
    protected $_name = [
        'policyType'      => 'PolicyType',
        'description'     => 'Description',
        'resourceGroupId' => 'ResourceGroupId',
        'attachDate'      => 'AttachDate',
        'policyName'      => 'PolicyName',
        'principalName'   => 'PrincipalName',
        'principalType'   => 'PrincipalType',
    ];

    public function validate()
    {
        Model::validateRequired('policyType', $this->policyType, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('attachDate', $this->attachDate, true);
        Model::validateRequired('policyName', $this->policyName, true);
        Model::validateRequired('principalName', $this->principalName, true);
        Model::validateRequired('principalType', $this->principalType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
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
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }

        return $model;
    }
}
