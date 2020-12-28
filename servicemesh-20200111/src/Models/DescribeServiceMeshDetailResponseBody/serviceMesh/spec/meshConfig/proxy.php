<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class proxy extends Model
{
    /**
     * @var string
     */
    public $requestMemory;

    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var string
     */
    public $limitMemory;

    /**
     * @var string
     */
    public $requestCPU;

    /**
     * @var string
     */
    public $limitCPU;
    protected $_name = [
        'requestMemory' => 'RequestMemory',
        'clusterDomain' => 'ClusterDomain',
        'limitMemory'   => 'LimitMemory',
        'requestCPU'    => 'RequestCPU',
        'limitCPU'      => 'LimitCPU',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }

        return $model;
    }
}
