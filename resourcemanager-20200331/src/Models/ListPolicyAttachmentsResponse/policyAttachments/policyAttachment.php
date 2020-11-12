<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyAttachmentsResponse\policyAttachments;

use AlibabaCloud\Tea\Model;

class policyAttachment extends Model
{
    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $principalType;

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
    public $description;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'policyType'      => 'PolicyType',
        'policyName'      => 'PolicyName',
        'principalType'   => 'PrincipalType',
        'principalName'   => 'PrincipalName',
        'attachDate'      => 'AttachDate',
        'description'     => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('policyType', $this->policyType, true);
        Model::validateRequired('policyName', $this->policyName, true);
        Model::validateRequired('principalType', $this->principalType, true);
        Model::validateRequired('principalName', $this->principalName, true);
        Model::validateRequired('attachDate', $this->attachDate, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
