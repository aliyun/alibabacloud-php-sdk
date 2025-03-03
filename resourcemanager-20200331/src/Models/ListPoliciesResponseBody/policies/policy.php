<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPoliciesResponseBody\policies;

use AlibabaCloud\Dara\Model;

class policy extends Model
{
    /**
     * @var int
     */
    public $attachmentCount;
    /**
     * @var string
     */
    public $createDate;
    /**
     * @var string
     */
    public $defaultVersion;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $policyName;
    /**
     * @var string
     */
    public $policyType;
    /**
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'attachmentCount' => 'AttachmentCount',
        'createDate'      => 'CreateDate',
        'defaultVersion'  => 'DefaultVersion',
        'description'     => 'Description',
        'policyName'      => 'PolicyName',
        'policyType'      => 'PolicyType',
        'updateDate'      => 'UpdateDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentCount) {
            $res['AttachmentCount'] = $this->attachmentCount;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentCount'])) {
            $model->attachmentCount = $map['AttachmentCount'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
