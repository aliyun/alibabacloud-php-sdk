<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateInjectedProxyConfigRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentNames;

    /**
     * @var string
     */
    public $guestCluster;

    /**
     * @var string
     */
    public $limitCPUs;

    /**
     * @var string
     */
    public $limitMemories;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $requestCPUs;

    /**
     * @var string
     */
    public $requestMemories;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'deploymentNames' => 'DeploymentNames',
        'guestCluster'    => 'GuestCluster',
        'limitCPUs'       => 'LimitCPUs',
        'limitMemories'   => 'LimitMemories',
        'namespace'       => 'Namespace',
        'requestCPUs'     => 'RequestCPUs',
        'requestMemories' => 'RequestMemories',
        'serviceMeshId'   => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentNames) {
            $res['DeploymentNames'] = $this->deploymentNames;
        }
        if (null !== $this->guestCluster) {
            $res['GuestCluster'] = $this->guestCluster;
        }
        if (null !== $this->limitCPUs) {
            $res['LimitCPUs'] = $this->limitCPUs;
        }
        if (null !== $this->limitMemories) {
            $res['LimitMemories'] = $this->limitMemories;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->requestCPUs) {
            $res['RequestCPUs'] = $this->requestCPUs;
        }
        if (null !== $this->requestMemories) {
            $res['RequestMemories'] = $this->requestMemories;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInjectedProxyConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentNames'])) {
            $model->deploymentNames = $map['DeploymentNames'];
        }
        if (isset($map['GuestCluster'])) {
            $model->guestCluster = $map['GuestCluster'];
        }
        if (isset($map['LimitCPUs'])) {
            $model->limitCPUs = $map['LimitCPUs'];
        }
        if (isset($map['LimitMemories'])) {
            $model->limitMemories = $map['LimitMemories'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RequestCPUs'])) {
            $model->requestCPUs = $map['RequestCPUs'];
        }
        if (isset($map['RequestMemories'])) {
            $model->requestMemories = $map['RequestMemories'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
