<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class proxy extends Model
{
    /**
     * @var string
     */
    public $accessLogFile;

    /**
     * @var string
     */
    public $accessLogFormat;

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

    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var bool
     */
    public $enableDNSProxying;

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
    public $requestCPU;

    /**
     * @var string
     */
    public $requestMemory;
    protected $_name = [
        'accessLogFile'           => 'AccessLogFile',
        'accessLogFormat'         => 'AccessLogFormat',
        'accessLogServiceEnabled' => 'AccessLogServiceEnabled',
        'accessLogServiceHost'    => 'AccessLogServiceHost',
        'accessLogServicePort'    => 'AccessLogServicePort',
        'clusterDomain'           => 'ClusterDomain',
        'enableDNSProxying'       => 'EnableDNSProxying',
        'limitCPU'                => 'LimitCPU',
        'limitMemory'             => 'LimitMemory',
        'requestCPU'              => 'RequestCPU',
        'requestMemory'           => 'RequestMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogFile) {
            $res['AccessLogFile'] = $this->accessLogFile;
        }
        if (null !== $this->accessLogFormat) {
            $res['AccessLogFormat'] = $this->accessLogFormat;
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
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->enableDNSProxying) {
            $res['EnableDNSProxying'] = $this->enableDNSProxying;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
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
        if (isset($map['AccessLogFile'])) {
            $model->accessLogFile = $map['AccessLogFile'];
        }
        if (isset($map['AccessLogFormat'])) {
            $model->accessLogFormat = $map['AccessLogFormat'];
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
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['EnableDNSProxying'])) {
            $model->enableDNSProxying = $map['EnableDNSProxying'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }

        return $model;
    }
}
