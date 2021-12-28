<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceMeshRequest extends Model
{
    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $retainResources;

    /**
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
