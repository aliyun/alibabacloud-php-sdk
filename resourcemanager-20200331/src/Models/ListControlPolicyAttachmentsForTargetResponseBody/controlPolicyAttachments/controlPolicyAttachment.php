<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPolicyAttachmentsForTargetResponseBody\controlPolicyAttachments;

use AlibabaCloud\Tea\Model;

class controlPolicyAttachment extends Model
{
    /**
     * @example 2021-03-19T02:56:24Z
     *
     * @var string
     */
    public $attachDate;

    /**
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $effectScope;

    /**
     * @example cp-jExXAqIYkwHN****
     *
     * @var string
     */
    public $policyId;

    /**
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $policyName;

    /**
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
