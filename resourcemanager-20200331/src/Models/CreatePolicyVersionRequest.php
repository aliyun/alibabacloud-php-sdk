<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

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
     * @var bool
     */
    public $setAsDefault;
    protected $_name = [
        'policyDocument' => 'PolicyDocument',
        'policyName'     => 'PolicyName',
        'setAsDefault'   => 'SetAsDefault',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->setAsDefault) {
            $res['SetAsDefault'] = $this->setAsDefault;
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
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['SetAsDefault'])) {
            $model->setAsDefault = $map['SetAsDefault'];
        }

        return $model;
    }
}
