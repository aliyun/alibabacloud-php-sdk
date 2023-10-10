<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Tea\Model;

class webContainerConfig extends Model
{
    /**
     * @var string
     */
    public $connectorType;

    /**
     * @var string
     */
    public $contextInputType;

    /**
     * @var string
     */
    public $contextPath;

    /**
     * @var int
     */
    public $httpPort;

    /**
     * @var int
     */
    public $maxThreads;

    /**
     * @var string
     */
    public $serverXml;

    /**
     * @var string
     */
    public $uriEncoding;

    /**
     * @var bool
     */
    public $useAdvancedServerXml;

    /**
     * @var bool
     */
    public $useBodyEncoding;

    /**
     * @var bool
     */
    public $useDefaultConfig;
    protected $_name = [
        'connectorType'        => 'ConnectorType',
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
        if (null !== $this->connectorType) {
            $res['ConnectorType'] = $this->connectorType;
        }
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
        if (isset($map['ConnectorType'])) {
            $model->connectorType = $map['ConnectorType'];
        }
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
