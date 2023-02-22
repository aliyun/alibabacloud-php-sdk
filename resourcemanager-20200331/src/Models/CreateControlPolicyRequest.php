<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class CreateControlPolicyRequest extends Model
{
    /**
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $description;

    /**
     * @example RAM
     *
     * @var string
     */
    public $effectScope;

    /**
     * @example {"Version":"1","Statement":[{"Effect":"Deny","Action":["ram:UpdateRole","ram:DeleteRole","ram:AttachPolicyToRole","ram:DetachPolicyFromRole"],"Resource":"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole"}]}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $policyName;
    protected $_name = [
        'description'    => 'Description',
        'effectScope'    => 'EffectScope',
        'policyDocument' => 'PolicyDocument',
        'policyName'     => 'PolicyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->effectScope) {
            $res['EffectScope'] = $this->effectScope;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EffectScope'])) {
            $model->effectScope = $map['EffectScope'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
