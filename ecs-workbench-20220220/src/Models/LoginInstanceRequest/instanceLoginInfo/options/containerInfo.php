<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\instanceLoginInfo\options;

use AlibabaCloud\Tea\Model;

class containerInfo extends Model
{
    /**
     * @example abcdef
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example abc
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example abc
     *
     * @var string
     */
    public $containerName;

    /**
     * @example abc
     *
     * @var string
     */
    public $deployment;

    /**
     * @example abc
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example {"abc":"def"}
     *
     * @var mixed[]
     */
    public $headers;

    /**
     * @example abc
     *
     * @var string
     */
    public $namespace;

    /**
     * @example abc
     *
     * @var string
     */
    public $podName;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'clusterName'   => 'ClusterName',
        'containerName' => 'ContainerName',
        'deployment'    => 'Deployment',
        'endpoint'      => 'Endpoint',
        'headers'       => 'Headers',
        'namespace'     => 'Namespace',
        'podName'       => 'PodName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->deployment) {
            $res['Deployment'] = $this->deployment;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['Deployment'])) {
            $model->deployment = $map['Deployment'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        return $model;
    }
}
