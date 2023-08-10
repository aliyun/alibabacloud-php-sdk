<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareRequest\resources;
use AlibabaCloud\Tea\Model;

class CreateResourceShareRequest extends Model
{
    /**
     * @description Specifies whether resources in the resource share can be shared with accounts outside the resource directory. Valid values:
     *
     *   false: Resources in the resource share can be shared only with accounts in the resource directory. This is the default value.
     *   true: Resources in the resource share can be shared with both accounts in the resource directory and accounts outside the resource directory.
     *
     * @example false
     *
     * @var bool
     */
    public $allowExternalTargets;

    /**
     * @var string[]
     */
    public $permissionNames;

    /**
     * @description The name of the resource share.
     *
     * The name can contain letters, digits, periods (.), underscores (\_), and hyphens (-).
     * @example test
     *
     * @var string
     */
    public $resourceShareName;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @example 172050525300****
     *
     * @var string[]
     */
    public $targets;
    protected $_name = [
        'allowExternalTargets' => 'AllowExternalTargets',
        'permissionNames'      => 'PermissionNames',
        'resourceShareName'    => 'ResourceShareName',
        'resources'            => 'Resources',
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
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = $map['Targets'];
            }
        }

        return $model;
    }
}
