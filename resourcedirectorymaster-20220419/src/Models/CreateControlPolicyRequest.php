<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class CreateControlPolicyRequest extends Model
{
    /**
     * @description The description of the access control policy.
     *
     * The description must be 1 to 1,024 characters in length. The description can contain letters, digits, underscores (\_), and hyphens (-) and must start with a letter.
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $description;

    /**
     * @description The effective scope of the access control policy.
     *
     * The value RAM indicates that the access control policy takes effect only for RAM users and RAM roles.
     * @example RAM
     *
     * @var string
     */
    public $effectScope;

    /**
     * @description The document of the access control policy.
     *
     * For more information about the examples of access control policies, see [Examples of custom access control policies](~~181474~~).
     * @example {"Version":"1","Statement":[{"Effect":"Deny","Action":["ram:UpdateRole","ram:DeleteRole","ram:AttachPolicyToRole","ram:DetachPolicyFromRole"],"Resource":"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole"}]}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The name of the access control policy.
     *
     * The name must be 1 to 128 characters in length. The name can contain letters, digits, and hyphens (-) and must start with a letter.
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
