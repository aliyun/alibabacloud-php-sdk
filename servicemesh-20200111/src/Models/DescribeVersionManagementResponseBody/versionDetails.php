<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionManagementResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionManagementResponseBody\versionDetails\podInstances;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionManagementResponseBody\versionDetails\resource;
use AlibabaCloud\Tea\Model;

class versionDetails extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deploymentName;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var bool
     */
    public $inject;

    /**
     * @var podInstances[]
     */
    public $podInstances;

    /**
     * @var int
     */
    public $readyReplicas;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'deploymentName' => 'DeploymentName',
        'images'         => 'Images',
        'inject'         => 'Inject',
        'podInstances'   => 'PodInstances',
        'readyReplicas'  => 'ReadyReplicas',
        'replicas'       => 'Replicas',
        'resource'       => 'Resource',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deploymentName) {
            $res['DeploymentName'] = $this->deploymentName;
        }
        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }
        if (null !== $this->inject) {
            $res['Inject'] = $this->inject;
        }
        if (null !== $this->podInstances) {
            $res['PodInstances'] = [];
            if (null !== $this->podInstances && \is_array($this->podInstances)) {
                $n = 0;
                foreach ($this->podInstances as $item) {
                    $res['PodInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->readyReplicas) {
            $res['ReadyReplicas'] = $this->readyReplicas;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeploymentName'])) {
            $model->deploymentName = $map['DeploymentName'];
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = $map['Images'];
            }
        }
        if (isset($map['Inject'])) {
            $model->inject = $map['Inject'];
        }
        if (isset($map['PodInstances'])) {
            if (!empty($map['PodInstances'])) {
                $model->podInstances = [];
                $n                   = 0;
                foreach ($map['PodInstances'] as $item) {
                    $model->podInstances[$n++] = null !== $item ? podInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReadyReplicas'])) {
            $model->readyReplicas = $map['ReadyReplicas'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
