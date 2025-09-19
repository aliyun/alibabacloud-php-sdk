<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\instanceLoginInfo\options;

use AlibabaCloud\Dara\Model;

class containerInfo extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $deployment;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var mixed[]
     */
    public $headers;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $podName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'containerName' => 'ContainerName',
        'deployment' => 'Deployment',
        'endpoint' => 'Endpoint',
        'headers' => 'Headers',
        'namespace' => 'Namespace',
        'podName' => 'PodName',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['Headers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
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
            if (!empty($map['Headers'])) {
                $model->headers = [];
                foreach ($map['Headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
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
