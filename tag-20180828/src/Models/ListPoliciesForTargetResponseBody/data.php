<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListPoliciesForTargetResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $policyContent;

    /**
     * @var string
     */
    public $policyDesc;

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
    public $userType;
    protected $_name = [
        'policyContent' => 'PolicyContent',
        'policyDesc'    => 'PolicyDesc',
        'policyId'      => 'PolicyId',
        'policyName'    => 'PolicyName',
        'userType'      => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyContent) {
            $res['PolicyContent'] = $this->policyContent;
        }
        if (null !== $this->policyDesc) {
            $res['PolicyDesc'] = $this->policyDesc;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyContent'])) {
            $model->policyContent = $map['PolicyContent'];
        }
        if (isset($map['PolicyDesc'])) {
            $model->policyDesc = $map['PolicyDesc'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
