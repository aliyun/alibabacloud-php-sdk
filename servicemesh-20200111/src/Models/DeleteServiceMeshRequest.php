<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceMeshRequest extends Model
{
    /**
     * @description Specifies whether to forcibly delete the ASM instance. Valid values:
     *
     *   `true`: forcibly deletes the ASM instance.
     *   `false`: does not forcibly delete the ASM instance.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description A JSON string that can be parsed into a string array. You can use this JSON string to specify the IDs of the resource instances that need to be retained when the ASM instance is deleted.
     *
     * @example [" lb-bp1fxvl3q8akbj6m*****", "lb-bp1hoxkolggdw0y3*****"]
     *
     * @var string
     */
    public $retainResources;

    /**
     * @description The ASM instance ID.
     *
     * @example c08ba3fd1e6484b0f8cc1ad8fe10d****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'force'           => 'Force',
        'retainResources' => 'RetainResources',
        'serviceMeshId'   => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->retainResources) {
            $res['RetainResources'] = $this->retainResources;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceMeshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['RetainResources'])) {
            $model->retainResources = $map['RetainResources'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
