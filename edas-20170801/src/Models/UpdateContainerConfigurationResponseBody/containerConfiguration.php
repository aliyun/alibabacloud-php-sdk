<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerConfigurationResponseBody;

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
     * @description The application port number for the Tomcat container.
     *
     * @example 8080
     *
     * @var int
     */
    public $httpPort;

    /**
     * @description The maximum number of threads.
     *
     * @example 20
     *
     * @var int
     */
    public $maxThreads;

    /**
     * @description The URI encoding scheme. Valid values: ISO-8859-1, GBK, GB2312, and UTF-8.
     *
     * @example ISO-8859-1
     *
     * @var string
     */
    public $URIEncoding;

    /**
     * @description Indicates whether useBodyEncodingForURI is enabled.
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
