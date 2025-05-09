<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAbacPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class policy extends Model
{
    /**
     * @var string
     */
    public $authorizedQuantity;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $policyContent;

    /**
     * @var string
     */
    public $policyDesc;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policySource;
    protected $_name = [
        'authorizedQuantity' => 'AuthorizedQuantity',
        'creatorId' => 'CreatorId',
        'policyContent' => 'PolicyContent',
        'policyDesc' => 'PolicyDesc',
        'policyId' => 'PolicyId',
        'policyName' => 'PolicyName',
        'policySource' => 'PolicySource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
