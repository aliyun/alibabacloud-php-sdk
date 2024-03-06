<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyResponseBody extends Model
{
    /**
     * @description The name of the access control rule.
     *
     * @example {"NetworkRules":["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]}
     *
     * @var string
     */
    public $accessControlRules;

    /**
     * @description The ARN of the permission policy.
     *
     * @example acs:kms:cn-hangzhou:119285303511****:policy/policy_test
     *
     * @var string
     */
    public $arn;

    /**
     * @description The description.
     *
     * @example policy  description
     *
     * @var string
     */
    public $description;

    /**
     * @description The scope of the permission policy.
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
     * @description The operations that can be performed.
     *
     * @example ["RbacPermission/Template/CryptoServiceKeyUser", "RbacPermission/Template/CryptoServiceSecretUser"]
     *
     * @var string
     */
    public $permissions;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 3bf02f7a-015b-4f34-be0f-c4543fda2d33
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The key and secret that are allowed to access.
     *
     *   `key/*` indicates that all keys of the KMS instance can be accessed.
     *   `secret/*` indicates all secrets of the KMS instance can be accessed.
     *
     * @example ["secret/acs/ram/user/ram-secret", "secret/acs/ram/user/acr-master", "key/key-hzz63d9c8d3dfv8cv****"]
     *
     * @var string
     */
    public $resources;
    protected $_name = [
        'accessControlRules' => 'AccessControlRules',
        'arn'                => 'Arn',
        'description'        => 'Description',
        'kmsInstance'        => 'KmsInstance',
        'name'               => 'Name',
        'permissions'        => 'Permissions',
        'requestId'          => 'RequestId',
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
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlRules'])) {
            $model->accessControlRules = $map['AccessControlRules'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
