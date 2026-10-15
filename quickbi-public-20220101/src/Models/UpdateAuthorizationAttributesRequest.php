<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class UpdateAuthorizationAttributesRequest extends Model
{
    /**
     * @var int
     */
    public $editPermissionType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $usePermissionType;
    protected $_name = [
        'editPermissionType' => 'EditPermissionType',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'usePermissionType' => 'UsePermissionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editPermissionType) {
            $res['EditPermissionType'] = $this->editPermissionType;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->usePermissionType) {
            $res['UsePermissionType'] = $this->usePermissionType;
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
        if (isset($map['EditPermissionType'])) {
            $model->editPermissionType = $map['EditPermissionType'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['UsePermissionType'])) {
            $model->usePermissionType = $map['UsePermissionType'];
        }

        return $model;
    }
}
