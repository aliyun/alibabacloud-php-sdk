<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListAgenticSecurityPoliciesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aliyunAccountUid;

    /**
     * @var string
     */
    public $basePolicyId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyStatus;

    /**
     * @var bool
     */
    public $readonly;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $updatedBy;
    protected $_name = [
        'aliyunAccountUid' => 'AliyunAccountUid',
        'basePolicyId' => 'BasePolicyId',
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'policyId' => 'PolicyId',
        'policyName' => 'PolicyName',
        'policyStatus' => 'PolicyStatus',
        'readonly' => 'Readonly',
        'tags' => 'Tags',
        'updatedBy' => 'UpdatedBy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunAccountUid) {
            $res['AliyunAccountUid'] = $this->aliyunAccountUid;
        }

        if (null !== $this->basePolicyId) {
            $res['BasePolicyId'] = $this->basePolicyId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }

        if (null !== $this->readonly) {
            $res['Readonly'] = $this->readonly;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->updatedBy) {
            $res['UpdatedBy'] = $this->updatedBy;
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
        if (isset($map['AliyunAccountUid'])) {
            $model->aliyunAccountUid = $map['AliyunAccountUid'];
        }

        if (isset($map['BasePolicyId'])) {
            $model->basePolicyId = $map['BasePolicyId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }

        if (isset($map['Readonly'])) {
            $model->readonly = $map['Readonly'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['UpdatedBy'])) {
            $model->updatedBy = $map['UpdatedBy'];
        }

        return $model;
    }
}
