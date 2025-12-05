<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class CreatePolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessControlRules;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $kmsInstance;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $permissions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resources;
    protected $_name = [
        'accessControlRules' => 'AccessControlRules',
        'arn' => 'Arn',
        'description' => 'Description',
        'kmsInstance' => 'KmsInstance',
        'name' => 'Name',
        'permissions' => 'Permissions',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
