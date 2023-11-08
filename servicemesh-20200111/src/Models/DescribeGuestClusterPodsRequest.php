<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeGuestClusterPodsRequest extends Model
{
    /**
     * @description The ID of the Kubernetes cluster that is added to the ASM instance.
     *
     * @example c49ad2169d5a04f2d89dfc4b6bcu****
     *
     * @var string
     */
    public $guestClusterID;

    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ASM instance ID.
     *
     * @example c78d60f98fa43403ab6e0701b2678****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'guestClusterID' => 'GuestClusterID',
        'namespace'      => 'Namespace',
        'serviceMeshId'  => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->guestClusterID) {
            $res['GuestClusterID'] = $this->guestClusterID;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGuestClusterPodsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GuestClusterID'])) {
            $model->guestClusterID = $map['GuestClusterID'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
