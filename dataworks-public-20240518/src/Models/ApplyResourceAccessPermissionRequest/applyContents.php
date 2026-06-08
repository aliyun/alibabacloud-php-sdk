<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ApplyResourceAccessPermissionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ApplyResourceAccessPermissionRequest\applyContents\grantee;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ApplyResourceAccessPermissionRequest\applyContents\resource;

class applyContents extends Model
{
    /**
     * @var string[]
     */
    public $accessTypes;

    /**
     * @var string
     */
    public $authMethod;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var grantee
     */
    public $grantee;

    /**
     * @var resource
     */
    public $resource;
    protected $_name = [
        'accessTypes' => 'AccessTypes',
        'authMethod' => 'AuthMethod',
        'expirationTime' => 'ExpirationTime',
        'grantee' => 'Grantee',
        'resource' => 'Resource',
    ];

    public function validate()
    {
        if (\is_array($this->accessTypes)) {
            Model::validateArray($this->accessTypes);
        }
        if (null !== $this->grantee) {
            $this->grantee->validate();
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTypes) {
            if (\is_array($this->accessTypes)) {
                $res['AccessTypes'] = [];
                $n1 = 0;
                foreach ($this->accessTypes as $item1) {
                    $res['AccessTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authMethod) {
            $res['AuthMethod'] = $this->authMethod;
        }

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->grantee) {
            $res['Grantee'] = null !== $this->grantee ? $this->grantee->toArray($noStream) : $this->grantee;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
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
        if (isset($map['AccessTypes'])) {
            if (!empty($map['AccessTypes'])) {
                $model->accessTypes = [];
                $n1 = 0;
                foreach ($map['AccessTypes'] as $item1) {
                    $model->accessTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthMethod'])) {
            $model->authMethod = $map['AuthMethod'];
        }

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['Grantee'])) {
            $model->grantee = grantee::fromMap($map['Grantee']);
        }

        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }

        return $model;
    }
}
