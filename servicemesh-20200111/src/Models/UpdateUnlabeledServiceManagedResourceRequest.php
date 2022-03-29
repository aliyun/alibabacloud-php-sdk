<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateUnlabeledServiceManagedResourceRequest extends Model
{
    /**
     * @var string
     */
    public $guestCluster;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'guestCluster'  => 'GuestCluster',
        'namespace'     => 'Namespace',
        'serviceMeshId' => 'ServiceMeshId',
        'serviceName'   => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->guestCluster) {
            $res['GuestCluster'] = $this->guestCluster;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUnlabeledServiceManagedResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GuestCluster'])) {
            $model->guestCluster = $map['GuestCluster'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
