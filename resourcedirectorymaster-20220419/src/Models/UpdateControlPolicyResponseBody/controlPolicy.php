<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateControlPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class controlPolicy extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $attachmentCount;

    /**
     * @example 2021-03-18T09:24:19Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $description;

    /**
     * @example RAM
     *
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
     * @example NewControlPolicy
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

    /**
     * @example 2021-03-18T10:04:55Z
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
