<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class UpdateControlPolicyRequest extends Model
{
    /**
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $newDescription;

    /**
     * @example {"Version":"1","Statement":[{"Effect":"Deny","Action":["ram:UpdateRole","ram:DeleteRole","ram:AttachPolicyToRole","ram:DetachPolicyFromRole"],"Resource":"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole"}]}
     *
     * @var string
     */
    public $newPolicyDocument;

    /**
     * @example NewControlPolicy
     *
     * @var string
     */
    public $newPolicyName;

    /**
     * @example cp-jExXAqIYkwHN****
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'newDescription'    => 'NewDescription',
        'newPolicyDocument' => 'NewPolicyDocument',
        'newPolicyName'     => 'NewPolicyName',
        'policyId'          => 'PolicyId',
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
        if (null !== $this->newPolicyDocument) {
            $res['NewPolicyDocument'] = $this->newPolicyDocument;
        }
        if (null !== $this->newPolicyName) {
            $res['NewPolicyName'] = $this->newPolicyName;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }
        if (isset($map['NewPolicyDocument'])) {
            $model->newPolicyDocument = $map['NewPolicyDocument'];
        }
        if (isset($map['NewPolicyName'])) {
            $model->newPolicyName = $map['NewPolicyName'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
