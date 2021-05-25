<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class AddMeshTagToEcsRequest extends Model
{
    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $ecsId;
    protected $_name = [
        'serviceMeshId' => 'ServiceMeshId',
        'ecsId'         => 'EcsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMeshTagToEcsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }

        return $model;
    }
}
