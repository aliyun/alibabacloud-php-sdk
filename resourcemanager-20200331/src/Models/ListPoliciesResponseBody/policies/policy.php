<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPoliciesResponseBody\policies;

use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @description The number of times the policy is referenced.
     *
     * @example 1
     *
     * @var int
     */
    public $attachmentCount;

    /**
     * @description The time when the policy was created.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The default version of the policy.
     *
     * @example v1
     *
     * @var string
     */
    public $defaultVersion;

    /**
     * @description The description of the policy.
     *
     * @example OSS administrator
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the policy.
     *
     * @example OSS-Administrator
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The type of the policy. Valid values:
     *
     *   Custom: custom policy
     *   System: system policy
     *
     * @example Custom
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The time when the policy was updated.
     *
     * @example 2016-02-11T18:39:12Z
     *
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

    /**
     * @param array $map
     *
     * @return policy
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
