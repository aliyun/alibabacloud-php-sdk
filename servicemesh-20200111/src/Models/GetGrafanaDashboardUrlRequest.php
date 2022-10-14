<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetGrafanaDashboardUrlRequest extends Model
{
    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'k8sClusterId'  => 'K8sClusterId',
        'serviceMeshId' => 'ServiceMeshId',
        'title'         => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGrafanaDashboardUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
