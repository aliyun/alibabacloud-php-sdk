<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class UpdatePolicyV2ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $policyDescription;
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
    public $rulesShrink;
    protected $_name = [
        'policyDescription' => 'PolicyDescription',
        'policyId'          => 'PolicyId',
        'policyName'        => 'PolicyName',
        'rulesShrink'       => 'Rules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyDescription) {
            $res['PolicyDescription'] = $this->policyDescription;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->rulesShrink) {
            $res['Rules'] = $this->rulesShrink;
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
        if (isset($map['PolicyDescription'])) {
            $model->policyDescription = $map['PolicyDescription'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['Rules'])) {
            $model->rulesShrink = $map['Rules'];
        }

        return $model;
    }
}
