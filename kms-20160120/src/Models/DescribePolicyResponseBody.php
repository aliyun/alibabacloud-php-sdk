<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class DescribePolicyResponseBody extends Model
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
     * @var string[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
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
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
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
            if (\is_array($this->permissions)) {
                $res['Permissions'] = [];
                $n1 = 0;
                foreach ($this->permissions as $item1) {
                    $res['Permissions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n1 = 0;
                foreach ($map['Permissions'] as $item1) {
                    $model->permissions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
