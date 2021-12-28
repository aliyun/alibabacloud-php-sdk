<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeGuestClusterNamespacesRequest extends Model
{
    /**
     * @var string
     */
    public $guestClusterID;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'guestClusterID' => 'GuestClusterID',
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
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGuestClusterNamespacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GuestClusterID'])) {
            $model->guestClusterID = $map['GuestClusterID'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
