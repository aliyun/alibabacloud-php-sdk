<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\GetPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class policy extends Model
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
    public $policyName;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'policyContent' => 'PolicyContent',
        'policyDesc'    => 'PolicyDesc',
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
     * @return policy
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
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
