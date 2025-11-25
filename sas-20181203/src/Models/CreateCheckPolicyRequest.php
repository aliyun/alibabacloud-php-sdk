<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateCheckPolicyRequest extends Model
{
    /**
     * @var int
     */
    public $dependentPolicyId;

    /**
     * @var string
     */
    public $policyShowName;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dependentPolicyId' => 'DependentPolicyId',
        'policyShowName' => 'PolicyShowName',
        'policyType' => 'PolicyType',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependentPolicyId) {
            $res['DependentPolicyId'] = $this->dependentPolicyId;
        }

        if (null !== $this->policyShowName) {
            $res['PolicyShowName'] = $this->policyShowName;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DependentPolicyId'])) {
            $model->dependentPolicyId = $map['DependentPolicyId'];
        }

        if (isset($map['PolicyShowName'])) {
            $model->policyShowName = $map['PolicyShowName'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
