<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyVersionRequest extends Model
{
    /**
     * @var string
     */
    public $policyDocument;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $rotateStrategy;

    /**
     * @var bool
     */
    public $setAsDefault;
    protected $_name = [
        'policyDocument' => 'PolicyDocument',
        'policyName'     => 'PolicyName',
        'rotateStrategy' => 'RotateStrategy',
        'setAsDefault'   => 'SetAsDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->rotateStrategy) {
            $res['RotateStrategy'] = $this->rotateStrategy;
        }
        if (null !== $this->setAsDefault) {
            $res['SetAsDefault'] = $this->setAsDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['RotateStrategy'])) {
            $model->rotateStrategy = $map['RotateStrategy'];
        }
        if (isset($map['SetAsDefault'])) {
            $model->setAsDefault = $map['SetAsDefault'];
        }

        return $model;
    }
}
