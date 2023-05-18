<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPolicyAttachmentsForTargetResponseBody\controlPolicyAttachments;

use AlibabaCloud\Tea\Model;

class controlPolicyAttachment extends Model
{
    /**
     * @description The time when the access control policy was attached.
     *
     * @example 2021-03-19T02:56:24Z
     *
     * @var string
     */
    public $attachDate;

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
     * @description The ID of the access control policy.
     *
     * @example cp-jExXAqIYkwHN****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The name of the access control policy.
     *
     * @example ExampleControlPolicy
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
    protected $_name = [
        'attachDate'  => 'AttachDate',
        'description' => 'Description',
        'effectScope' => 'EffectScope',
        'policyId'    => 'PolicyId',
        'policyName'  => 'PolicyName',
        'policyType'  => 'PolicyType',
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
        if (null !== $this->effectScope) {
            $res['EffectScope'] = $this->effectScope;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return controlPolicyAttachment
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
        if (isset($map['EffectScope'])) {
            $model->effectScope = $map['EffectScope'];
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

        return $model;
    }
}
