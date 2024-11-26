<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAbacPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $authorizedQuantity;

    /**
     * @example 51****
     *
     * @var int
     */
    public $creatorId;

    /**
     * @example {
     * {
     * "Action": "*",
     * "Effect": "Allow",
     * "Resource": "*",
     * }
     * @var string
     */
    public $policyContent;

    /**
     * @example test
     *
     * @var string
     */
    public $policyDesc;

    /**
     * @example 12****
     *
     * @var int
     */
    public $policyId;

    /**
     * @example policy_test
     *
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policySource;
    protected $_name = [
        'authorizedQuantity' => 'AuthorizedQuantity',
        'creatorId'          => 'CreatorId',
        'policyContent'      => 'PolicyContent',
        'policyDesc'         => 'PolicyDesc',
        'policyId'           => 'PolicyId',
        'policyName'         => 'PolicyName',
        'policySource'       => 'PolicySource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedQuantity) {
            $res['AuthorizedQuantity'] = $this->authorizedQuantity;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
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
        if (null !== $this->policySource) {
            $res['PolicySource'] = $this->policySource;
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
        if (isset($map['AuthorizedQuantity'])) {
            $model->authorizedQuantity = $map['AuthorizedQuantity'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
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
        if (isset($map['PolicySource'])) {
            $model->policySource = $map['PolicySource'];
        }

        return $model;
    }
}
