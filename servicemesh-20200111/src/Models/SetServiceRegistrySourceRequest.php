<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class SetServiceRegistrySourceRequest extends Model
{
    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var mixed[]
     */
    public $config;
    protected $_name = [
        'serviceMeshId' => 'ServiceMeshId',
        'config'        => 'Config',
    ];

    public function validate()
    {
        Model::validateRequired('serviceMeshId', $this->serviceMeshId, true);
        Model::validateRequired('config', $this->config, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetServiceRegistrySourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        return $model;
    }
}
