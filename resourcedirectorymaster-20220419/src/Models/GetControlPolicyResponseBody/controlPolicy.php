<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetControlPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class controlPolicy extends Model
{
    /**
     * @description The number of times that the access control policy is referenced.
     *
     * @example 0
     *
     * @var string
     */
    public $attachmentCount;

    /**
     * @description The time when the access control policy was created.
     *
     * @example 2021-03-18T08:51:33Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The description of the access control policy.
     *
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $description;

    /**
     * @description The effective scope of the access control policy. Valid values:
     *
     *   All: The access control policy is in effect for Alibaba Cloud accounts, RAM users, and RAM roles.
     *   RAM: The access control policy is in effect only for RAM users and RAM roles.
     *
     * @example RAM
     *
     * @var string
     */
    public $effectScope;

    /**
     * @description The document of the access control policy.
     *
     * @example {\\"Version\\":\\"1\\",\\"Statement\\":[{\\"Effect\\":\\"Deny\\",\\"Action\\":[\\"ram:UpdateRole\\",\\"ram:DeleteRole\\",\\"ram:AttachPolicyToRole\\",\\"ram:DetachPolicyFromRole\\"],\\"Resource\\":\\"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole\\"}]}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The ID of the access control policy.
     *
     * @example cp-SImPt8GCEwiq****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The name of the access control policy.
     *
     * @example test
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The type of the access control policy. Valid values:
     *
     *   System: system access control policy
     *   Custom: custom access control policy
     *
     * @example Custom
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The time when the access control policy was updated.
     *
     * @example 2021-03-18T08:51:33Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'attachmentCount' => 'AttachmentCount',
        'createDate' => 'CreateDate',
        'description' => 'Description',
        'effectScope' => 'EffectScope',
        'policyDocument' => 'PolicyDocument',
        'policyId' => 'PolicyId',
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
        'updateDate' => 'UpdateDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentCount) {
            $res['AttachmentCount'] = $this->attachmentCount;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->effectScope) {
            $res['EffectScope'] = $this->effectScope;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return controlPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentCount'])) {
            $model->attachmentCount = $map['AttachmentCount'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EffectScope'])) {
            $model->effectScope = $map['EffectScope'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
