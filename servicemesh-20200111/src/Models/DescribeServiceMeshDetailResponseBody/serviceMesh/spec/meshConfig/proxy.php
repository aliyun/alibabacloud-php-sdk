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
     * @var bool
     */
    public $enableDNSProxying;

    /**
     * @var string
     */
    public $limitCPU;

    /**
     * @var bool
     */
    public $accessLogServiceEnabled;

    /**
     * @var string
     */
    public $accessLogServiceHost;

    /**
     * @var int
     */
    public $accessLogServicePort;
    protected $_name = [
        'requestMemory'           => 'RequestMemory',
        'clusterDomain'           => 'ClusterDomain',
        'limitMemory'             => 'LimitMemory',
        'requestCPU'              => 'RequestCPU',
        'enableDNSProxying'       => 'EnableDNSProxying',
        'limitCPU'                => 'LimitCPU',
        'accessLogServiceEnabled' => 'AccessLogServiceEnabled',
        'accessLogServiceHost'    => 'AccessLogServiceHost',
        'accessLogServicePort'    => 'AccessLogServicePort',
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
        if (null !== $this->enableDNSProxying) {
            $res['EnableDNSProxying'] = $this->enableDNSProxying;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }
        if (null !== $this->accessLogServiceEnabled) {
            $res['AccessLogServiceEnabled'] = $this->accessLogServiceEnabled;
        }
        if (null !== $this->accessLogServiceHost) {
            $res['AccessLogServiceHost'] = $this->accessLogServiceHost;
        }
        if (null !== $this->accessLogServicePort) {
            $res['AccessLogServicePort'] = $this->accessLogServicePort;
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
        if (isset($map['EnableDNSProxying'])) {
            $model->enableDNSProxying = $map['EnableDNSProxying'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }
        if (isset($map['AccessLogServiceEnabled'])) {
            $model->accessLogServiceEnabled = $map['AccessLogServiceEnabled'];
        }
        if (isset($map['AccessLogServiceHost'])) {
            $model->accessLogServiceHost = $map['AccessLogServiceHost'];
        }
        if (isset($map['AccessLogServicePort'])) {
            $model->accessLogServicePort = $map['AccessLogServicePort'];
        }

        return $model;
    }
}
