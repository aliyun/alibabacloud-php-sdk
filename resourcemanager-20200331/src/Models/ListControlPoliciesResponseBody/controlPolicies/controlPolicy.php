<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPoliciesResponseBody\controlPolicies;

use AlibabaCloud\Tea\Model;

class controlPolicy extends Model
{
    /**
     * @description The number of times that the access control policy is referenced.
     *
     * @example 44
     *
     * @var string
     */
    public $attachmentCount;

    /**
     * @description The time when the access control policy was created.
     *
     * @example 2020-08-05T06:32:24Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The description of the access control policy.
     *
     * @var string
     */
    public $description;

    /**
     * @description The effective scope of the access control policy. Valid values:
     *
     * - RAM: The access control policy is in effect only for RAM users and RAM roles.
     * @example All
     *
     * @var string
     */
    public $effectScope;

    /**
     * @description The ID of the access control policy.
     *
     * @example cp-FullAliyunAccess
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The name of the access control policy.
     *
     * @example FullAliyunAccess
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The type of the access control policy. Valid values:
     *
     * - Custom: custom access control policy
     * @example System
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The time when the access control policy was updated.
     *
     * @example 2020-08-05T06:32:24Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'attachmentCount' => 'AttachmentCount',
        'createDate'      => 'CreateDate',
        'description'     => 'Description',
        'effectScope'     => 'EffectScope',
        'policyId'        => 'PolicyId',
        'policyName'      => 'PolicyName',
        'policyType'      => 'PolicyType',
        'updateDate'      => 'UpdateDate',
    ];

    public function validate()
    {
    }

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
