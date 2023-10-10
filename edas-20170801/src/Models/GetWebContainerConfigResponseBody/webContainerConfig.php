<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetWebContainerConfigResponseBody;

use AlibabaCloud\Tea\Model;

class webContainerConfig extends Model
{
    /**
     * @description The type of the context path.
     *
     * @example root
     *
     * @var string
     */
    public $contextInputType;

    /**
     * @description The context path.
     *
     * @example ROOT
     *
     * @var string
     */
    public $contextPath;

    /**
     * @description The HTTP service port.
     *
     * @example 8080
     *
     * @var int
     */
    public $httpPort;

    /**
     * @description The maximum number of threads.
     *
     * @example 500
     *
     * @var int
     */
    public $maxThreads;

    /**
     * @description The content of the server.xml file customized by using advanced configurations.
     *
     * @example <Server port=*****
     *
     * @var string
     */
    public $serverXml;

    /**
     * @description The URI encoding scheme.
     *
     * @example ISO-8859-1
     *
     * @var string
     */
    public $uriEncoding;

    /**
     * @description Indicates whether advanced configurations are used to customize the server.xml file.
     *
     * @example true
     *
     * @var bool
     */
    public $useAdvancedServerXml;

    /**
     * @description Indicates whether the encoding scheme specified in the request body is used for uniform resource identifier (URI) query parameters.
     *
     * @example true
     *
     * @var bool
     */
    public $useBodyEncoding;

    /**
     * @description Indicates whether the default configurations are used.
     *
     * @example true
     *
     * @var bool
     */
    public $useDefaultConfig;
    protected $_name = [
        'contextInputType'     => 'ContextInputType',
        'contextPath'          => 'ContextPath',
        'httpPort'             => 'HttpPort',
        'maxThreads'           => 'MaxThreads',
        'serverXml'            => 'ServerXml',
        'uriEncoding'          => 'UriEncoding',
        'useAdvancedServerXml' => 'UseAdvancedServerXml',
        'useBodyEncoding'      => 'UseBodyEncoding',
        'useDefaultConfig'     => 'UseDefaultConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contextInputType) {
            $res['ContextInputType'] = $this->contextInputType;
        }
        if (null !== $this->contextPath) {
            $res['ContextPath'] = $this->contextPath;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->maxThreads) {
            $res['MaxThreads'] = $this->maxThreads;
        }
        if (null !== $this->serverXml) {
            $res['ServerXml'] = $this->serverXml;
        }
        if (null !== $this->uriEncoding) {
            $res['UriEncoding'] = $this->uriEncoding;
        }
        if (null !== $this->useAdvancedServerXml) {
            $res['UseAdvancedServerXml'] = $this->useAdvancedServerXml;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }
        if (null !== $this->useDefaultConfig) {
            $res['UseDefaultConfig'] = $this->useDefaultConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webContainerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContextInputType'])) {
            $model->contextInputType = $map['ContextInputType'];
        }
        if (isset($map['ContextPath'])) {
            $model->contextPath = $map['ContextPath'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['MaxThreads'])) {
            $model->maxThreads = $map['MaxThreads'];
        }
        if (isset($map['ServerXml'])) {
            $model->serverXml = $map['ServerXml'];
        }
        if (isset($map['UriEncoding'])) {
            $model->uriEncoding = $map['UriEncoding'];
        }
        if (isset($map['UseAdvancedServerXml'])) {
            $model->useAdvancedServerXml = $map['UseAdvancedServerXml'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }
        if (isset($map['UseDefaultConfig'])) {
            $model->useDefaultConfig = $map['UseDefaultConfig'];
        }

        return $model;
    }
}
