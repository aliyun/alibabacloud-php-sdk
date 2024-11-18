<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareRequest\resources;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareRequest\tag;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareRequest\targetProperties;
use AlibabaCloud\Tea\Model;

class CreateResourceShareRequest extends Model
{
    /**
     * @description Specifies whether resources in the resource share can be shared with accounts outside the resource directory. Valid values:
     *
     *   false (default): Resources in the resource share can be shared only with accounts in the resource directory.
     *   true: Resources in the resource share can be shared with both accounts in the resource directory and accounts outside the resource directory.
     *
     * @example false
     *
     * @var bool
     */
    public $allowExternalTargets;

    /**
     * @description The information about the permissions. If you do not configure this parameter, the system automatically associates the default permission for the specified resource type with the resource share. For more information, see [Permission library](https://help.aliyun.com/document_detail/465474.html).
     *
     * @var string[]
     */
    public $permissionNames;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the resource share.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $resourceShareName;

    /**
     * @description The information about the shared resources.
     *
     * @var resources[]
     */
    public $resources;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The properties of the principal.
     *
     * >  This parameter is available only when you specify an Alibaba Cloud service as a principal.
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
        'allowExternalTargets' => 'AllowExternalTargets',
        'permissionNames'      => 'PermissionNames',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceShareName'    => 'ResourceShareName',
        'resources'            => 'Resources',
        'tag'                  => 'Tag',
        'targetProperties'     => 'TargetProperties',
        'targets'              => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowExternalTargets) {
            $res['AllowExternalTargets'] = $this->allowExternalTargets;
        }
        if (null !== $this->permissionNames) {
            $res['PermissionNames'] = $this->permissionNames;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return CreateResourceShareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowExternalTargets'])) {
            $model->allowExternalTargets = $map['AllowExternalTargets'];
        }
        if (isset($map['PermissionNames'])) {
            if (!empty($map['PermissionNames'])) {
                $model->permissionNames = $map['PermissionNames'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
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
