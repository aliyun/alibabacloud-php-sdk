<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPolicyAttachmentsForTargetResponseBody\controlPolicyAttachments;

use AlibabaCloud\Tea\Model;

class controlPolicyAttachment extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $effectScope;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $attachDate;

    /**
     * @var string
     */
    public $policyType;
    protected $_name = [
        'description' => 'Description',
        'effectScope' => 'EffectScope',
        'policyName'  => 'PolicyName',
        'policyId'    => 'PolicyId',
        'attachDate'  => 'AttachDate',
        'policyType'  => 'PolicyType',
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
        if (null !== $this->effectScope) {
            $res['EffectScope'] = $this->effectScope;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EffectScope'])) {
            $model->effectScope = $map['EffectScope'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
