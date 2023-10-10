<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetContainerConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class containerConfiguration extends Model
{
    /**
     * @description The context path of the Tomcat container.
     *
     * @example /
     *
     * @var string
     */
    public $contextPath;

    /**
     * @description The application port number for the Tomcat container. The value specified in the application configuration is returned.
     *
     * @example 8080
     *
     * @var int
     */
    public $httpPort;

    /**
     * @description The maximum number of threads in the Tomcat container.
     *
     *   If no instance group is specified, the configuration of the application is returned.
     *   If no application is specified, the default configuration is returned.
     *
     * @example 400
     *
     * @var int
     */
    public $maxThreads;

    /**
     * @description The Uniform Resource Identifier (URI) encoding scheme. Valid values: ISO-8859-1, GBK, GB2312, and UTF-8.
     *
     *   If no instance group is specified, the configuration of the application is returned.
     *   If no application is specified, the default configuration is returned.
     *
     * @example ISO-8859-1
     *
     * @var string
     */
    public $URIEncoding;

    /**
     * @description Indicates whether useBodyEncodingForURI is enabled in the Tomcat container.
     *
     *   If no instance group is specified, the configuration of the application is returned.
     *   If no application is specified, the default configuration is returned.
     *
     * @example true
     *
     * @var bool
     */
    public $useBodyEncoding;
    protected $_name = [
        'contextPath'     => 'ContextPath',
        'httpPort'        => 'HttpPort',
        'maxThreads'      => 'MaxThreads',
        'URIEncoding'     => 'URIEncoding',
        'useBodyEncoding' => 'UseBodyEncoding',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contextPath) {
            $res['ContextPath'] = $this->contextPath;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->maxThreads) {
            $res['MaxThreads'] = $this->maxThreads;
        }
        if (null !== $this->URIEncoding) {
            $res['URIEncoding'] = $this->URIEncoding;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContextPath'])) {
            $model->contextPath = $map['ContextPath'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['MaxThreads'])) {
            $model->maxThreads = $map['MaxThreads'];
        }
        if (isset($map['URIEncoding'])) {
            $model->URIEncoding = $map['URIEncoding'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }

        return $model;
    }
}
