<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class policyList extends Model
{
    /**
     * @description The document of the tag policy.
     *
     * @example {\"tags\":{\"CostCenter\":{\"tag_value\":{\"@@assign\":[\"Beijing\",\"Shanghai\"]},\"tag_key\":{\"@@assign\":\"CostCenter\"}}}}
     *
     * @var string
     */
    public $policyContent;

    /**
     * @description The description of the tag policy.
     *
     * @example This is a tag policy example.
     *
     * @var string
     */
    public $policyDesc;

    /**
     * @description The ID of the tag policy.
     *
     * @example p-de62a0bf400e4b69****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The name of the tag policy.
     *
     * @example example
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The mode of the Tag Policy feature. Valid values:
     *
     *   USER: single-account mode
     *   RD: multi-account mode
     *
     * For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](~~417434~~).
     * @example USER
     *
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
     * @return policyList
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
