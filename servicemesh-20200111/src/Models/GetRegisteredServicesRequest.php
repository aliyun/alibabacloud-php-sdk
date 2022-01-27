<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetRegisteredServicesRequest extends Model
{
    /**
     * @var string
     */
    public $guestClusters;

    /**
     * @var string
     */
    public $guestLimits;

    /**
     * @var string
     */
    public $guestMarkers;

    /**
     * @var int
     */
    public $meshLimit;

    /**
     * @var string
     */
    public $meshMarker;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'guestClusters' => 'GuestClusters',
        'guestLimits'   => 'GuestLimits',
        'guestMarkers'  => 'GuestMarkers',
        'meshLimit'     => 'MeshLimit',
        'meshMarker'    => 'MeshMarker',
        'namespace'     => 'Namespace',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->guestClusters) {
            $res['GuestClusters'] = $this->guestClusters;
        }
        if (null !== $this->guestLimits) {
            $res['GuestLimits'] = $this->guestLimits;
        }
        if (null !== $this->guestMarkers) {
            $res['GuestMarkers'] = $this->guestMarkers;
        }
        if (null !== $this->meshLimit) {
            $res['MeshLimit'] = $this->meshLimit;
        }
        if (null !== $this->meshMarker) {
            $res['MeshMarker'] = $this->meshMarker;
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
     * @return GetRegisteredServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GuestClusters'])) {
            $model->guestClusters = $map['GuestClusters'];
        }
        if (isset($map['GuestLimits'])) {
            $model->guestLimits = $map['GuestLimits'];
        }
        if (isset($map['GuestMarkers'])) {
            $model->guestMarkers = $map['GuestMarkers'];
        }
        if (isset($map['MeshLimit'])) {
            $model->meshLimit = $map['MeshLimit'];
        }
        if (isset($map['MeshMarker'])) {
            $model->meshMarker = $map['MeshMarker'];
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
