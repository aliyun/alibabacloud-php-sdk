<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateControlPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class controlPolicy extends Model
{
    /**
     * @var string
     */
    public $updateDate;

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
    public $attachmentCount;

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
    public $createDate;

    /**
     * @var string
     */
    public $policyType;
    protected $_name = [
        'updateDate'      => 'UpdateDate',
        'description'     => 'Description',
        'effectScope'     => 'EffectScope',
        'attachmentCount' => 'AttachmentCount',
        'policyName'      => 'PolicyName',
        'policyId'        => 'PolicyId',
        'createDate'      => 'CreateDate',
        'policyType'      => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->effectScope) {
            $res['EffectScope'] = $this->effectScope;
        }
        if (null !== $this->attachmentCount) {
            $res['AttachmentCount'] = $this->attachmentCount;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
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
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EffectScope'])) {
            $model->effectScope = $map['EffectScope'];
        }
        if (isset($map['AttachmentCount'])) {
            $model->attachmentCount = $map['AttachmentCount'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
