<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class UpdatePolicyDescriptionRequest extends Model
{
    /**
     * @description The description of the policy.
     *
     * The value of the parameter must be 1 to 1,024 characters in length.
     * @example This is a test policy.
     *
     * @var string
     */
    public $newDescription;

    /**
     * @description The name of the policy.
     *
     * @example TestPolicy
     *
     * @var string
     */
    public $policyName;
    protected $_name = [
        'newDescription' => 'NewDescription',
        'policyName'     => 'PolicyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePolicyDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
