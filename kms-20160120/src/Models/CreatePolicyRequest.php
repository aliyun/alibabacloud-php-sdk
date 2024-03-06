<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyRequest extends Model
{
    /**
     * @description The name of the access control rule.
     *
     * > For more information about how to query created access control rules, see [ListNetworkRules](~~2539433~~).
     * @example {"NetworkRules":["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]}
     *
     * @var string
     */
    public $accessControlRules;

    /**
     * @description The description.
     *
     * @example policy  description
     *
     * @var string
     */
    public $description;

    /**
     * @description The scope of the permission policy. You need to specify the KMS instance that you want to access.
     *
     * @example kst-hzz634e67d126u9p9****
     *
     * @var string
     */
    public $kmsInstance;

    /**
     * @description The name of the permission policy.
     *
     * @example policy_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The operations that can be performed. Valid values:
     *
     *   RbacPermission/Template/CryptoServiceKeyUser: allows you to perform cryptographic operations.
     *   RbacPermission/Template/CryptoServiceSecretUser: allows you to perform secret-related operations.
     *
     * You can select both.
     * @example ["RbacPermission/Template/CryptoServiceKeyUser", "RbacPermission/Template/CryptoServiceSecretUser"]
     *
     * @var string
     */
    public $permissions;

    /**
     * @description The key and secret that are allowed to access.
     *
     *   Key: Enter a key in the `key/${KeyId}` format. To allow access to all keys of a KMS instance, enter key/\*.
     *   Secret: Enter a secret in the `secret/${SecretName}` format. To allow access to all secrets of a KMS instance, enter secret/\*.
     *
     * @example ["secret/acs/ram/user/ram-secret", "secret/acs/ram/user/acr-master", "key/key-hzz63d9c8d3dfv8cv****"]
     *
     * @var string
     */
    public $resources;
    protected $_name = [
        'accessControlRules' => 'AccessControlRules',
        'description'        => 'Description',
        'kmsInstance'        => 'KmsInstance',
        'name'               => 'Name',
        'permissions'        => 'Permissions',
        'resources'          => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlRules) {
            $res['AccessControlRules'] = $this->accessControlRules;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->kmsInstance) {
            $res['KmsInstance'] = $this->kmsInstance;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->permissions) {
            $res['Permissions'] = $this->permissions;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlRules'])) {
            $model->accessControlRules = $map['AccessControlRules'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['KmsInstance'])) {
            $model->kmsInstance = $map['KmsInstance'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Permissions'])) {
            $model->permissions = $map['Permissions'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
