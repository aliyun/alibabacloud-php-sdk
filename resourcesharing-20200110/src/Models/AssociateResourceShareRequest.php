<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareRequest\resources;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareRequest\targetProperties;
use AlibabaCloud\Tea\Model;

class AssociateResourceShareRequest extends Model
{
    /**
     * @description The information about the permissions. If you do not configure this parameter, the system automatically associates the default permission for the specified resource type with the resource share. For more information, see [Permission library](~~465474~~).
     *
     * @var string[]
     */
    public $permissionNames;

    /**
     * @description The ID of the resource share.
     *
     * @example rs-6GRmdD3X****
     *
     * @var string
     */
    public $resourceShareId;

    /**
     * @description The information about the resources.
     *
     * @var resources[]
     */
    public $resources;

    /**
     * @var targetProperties[]
     */
    public $targetProperties;

    /**
     * @description The information about the principals.
     *
     * @example 172050525300****
     *
     * @var string[]
     */
    public $targets;
    protected $_name = [
        'permissionNames'  => 'PermissionNames',
        'resourceShareId'  => 'ResourceShareId',
        'resources'        => 'Resources',
        'targetProperties' => 'TargetProperties',
        'targets'          => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionNames) {
            $res['PermissionNames'] = $this->permissionNames;
        }
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetProperties) {
            $res['TargetProperties'] = [];
            if (null !== $this->targetProperties && \is_array($this->targetProperties)) {
                $n = 0;
                foreach ($this->targetProperties as $item) {
                    $res['TargetProperties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targets) {
            $res['Targets'] = $this->targets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateResourceShareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionNames'])) {
            if (!empty($map['PermissionNames'])) {
                $model->permissionNames = $map['PermissionNames'];
            }
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetProperties'])) {
            if (!empty($map['TargetProperties'])) {
                $model->targetProperties = [];
                $n                       = 0;
                foreach ($map['TargetProperties'] as $item) {
                    $model->targetProperties[$n++] = null !== $item ? targetProperties::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = $map['Targets'];
            }
        }

        return $model;
    }
}
