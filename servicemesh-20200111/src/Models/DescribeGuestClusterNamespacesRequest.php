<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeGuestClusterNamespacesRequest extends Model
{
    /**
     * @description The ID of the Kubernetes cluster that is added to the ASM instance.
     *
     * @example c584d805c7bd442b8bac421f9849f****
     *
     * @var string
     */
    public $guestClusterID;

    /**
     * @description The ASM instance ID.
     *
     * @example ce134b0727aa2492db69f6c3880e****
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description Specifies whether to return the labels of the namespaces.
     *
     * @example true
     *
     * @var bool
     */
    public $showNsLabels;
    protected $_name = [
        'guestClusterID' => 'GuestClusterID',
        'serviceMeshId'  => 'ServiceMeshId',
        'showNsLabels'   => 'ShowNsLabels',
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
        if (null !== $this->showNsLabels) {
            $res['ShowNsLabels'] = $this->showNsLabels;
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
        if (isset($map['ShowNsLabels'])) {
            $model->showNsLabels = $map['ShowNsLabels'];
        }

        return $model;
    }
}
