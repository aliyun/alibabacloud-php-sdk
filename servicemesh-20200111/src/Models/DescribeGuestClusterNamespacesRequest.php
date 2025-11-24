<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

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

    /**
     * @var bool
     */
    public $showNsLabels;
    protected $_name = [
        'guestClusterID' => 'GuestClusterID',
        'serviceMeshId' => 'ServiceMeshId',
        'showNsLabels' => 'ShowNsLabels',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
