<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPoliciesResponse\policies;

use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $attachmentCount;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $defaultVersion;

    /**
     * @var string
     */
    public $createDate;
    protected $_name = [
        'policyType'      => 'PolicyType',
        'updateDate'      => 'UpdateDate',
        'description'     => 'Description',
        'attachmentCount' => 'AttachmentCount',
        'policyName'      => 'PolicyName',
        'defaultVersion'  => 'DefaultVersion',
        'createDate'      => 'CreateDate',
    ];

    public function validate()
    {
        Model::validateRequired('policyType', $this->policyType, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('attachmentCount', $this->attachmentCount, true);
        Model::validateRequired('policyName', $this->policyName, true);
        Model::validateRequired('defaultVersion', $this->defaultVersion, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->attachmentCount) {
            $res['AttachmentCount'] = $this->attachmentCount;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AttachmentCount'])) {
            $model->attachmentCount = $map['AttachmentCount'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
