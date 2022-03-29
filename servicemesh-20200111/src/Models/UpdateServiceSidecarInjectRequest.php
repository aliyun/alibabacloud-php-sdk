<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceSidecarInjectRequest extends Model
{
    /**
     * @var string
     */
    public $guestCluster;

    /**
     * @var bool
     */
    public $inject;

    /**
     * @var string
     */
    public $limitCPU;

    /**
     * @var string
     */
    public $limitMemory;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $requestCPU;

    /**
     * @var string
     */
    public $requestMemory;

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
        'inject'        => 'Inject',
        'limitCPU'      => 'LimitCPU',
        'limitMemory'   => 'LimitMemory',
        'namespace'     => 'Namespace',
        'requestCPU'    => 'RequestCPU',
        'requestMemory' => 'RequestMemory',
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
        if (null !== $this->inject) {
            $res['Inject'] = $this->inject;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
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
     * @return UpdateServiceSidecarInjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GuestCluster'])) {
            $model->guestCluster = $map['GuestCluster'];
        }
        if (isset($map['Inject'])) {
            $model->inject = $map['Inject'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
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
