<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DescribePolicyResponseBody extends Model
{
    /**
     * @example {"NetworkRules":["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]}
     *
     * @var string
     */
    public $accessControlRules;

    /**
     * @example acs:kms:cn-hangzhou:119285303511****:policy/policy_test
     *
     * @var string
     */
    public $arn;

    /**
     * @example policy  description
     *
     * @var string
     */
    public $description;

    /**
     * @example kst-hzz634e67d126u9p9****
     *
     * @var string
     */
    public $kmsInstance;

    /**
     * @example policy_test
     *
     * @var string
     */
    public $name;

    /**
     * @example ["RbacPermission/Template/CryptoServiceKeyUser", "RbacPermission/Template/CryptoServiceSecretUser"]
     *
     * @var string[]
     */
    public $permissions;

    /**
     * @example f455324b-e229-4066-9f58-9c1cf3fe83a9
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ["secret/acs/ram/user/ram-secret", "secret/acs/ram/user/acr-master", "key/key-hzz63d9c8d3dfv8cv****"]
     *
     * @var string[]
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
     * @return DescribePolicyResponseBody
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
            if (!empty($map['Permissions'])) {
                $model->permissions = $map['Permissions'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = $map['Resources'];
            }
        }

        return $model;
    }
}
