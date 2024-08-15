<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class UpdateControlPolicyRequest extends Model
{
    /**
     * @description The new description of the access control policy.
     *
     * The description must be 1 to 1,024 characters in length. The description can contain letters, digits, underscores (_), and hyphens (-) and must start with a letter.
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $newDescription;

    /**
     * @description The new document of the access control policy.
     *
     * For more information about the examples of access control policies, see [Examples of custom access control policies](https://help.aliyun.com/document_detail/181474.html).
     * @example {"Version":"1","Statement":[{"Effect":"Deny","Action":["ram:UpdateRole","ram:DeleteRole","ram:AttachPolicyToRole","ram:DetachPolicyFromRole"],"Resource":"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole"}]}
     *
     * @var string
     */
    public $newPolicyDocument;

    /**
     * @description The new name of the access control policy.
     *
     * The name must be 1 to 128 characters in length. The name can contain letters, digits, and hyphens (-) and must start with a letter.
     * @example NewControlPolicy
     *
     * @var string
     */
    public $newPolicyName;

    /**
     * @description The ID of the access control policy.
     *
     * This parameter is required.
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
