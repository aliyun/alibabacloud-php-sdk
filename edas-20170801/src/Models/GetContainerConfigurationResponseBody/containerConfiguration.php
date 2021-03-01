<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetContainerConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class containerConfiguration extends Model
{
    /**
     * @var string
     */
    public $contextPath;

    /**
     * @var string
     */
    public $URIEncoding;

    /**
     * @var int
     */
    public $httpPort;

    /**
     * @var bool
     */
    public $useBodyEncoding;

    /**
     * @var int
     */
    public $maxThreads;
    protected $_name = [
        'contextPath'     => 'ContextPath',
        'URIEncoding'     => 'URIEncoding',
        'httpPort'        => 'HttpPort',
        'useBodyEncoding' => 'UseBodyEncoding',
        'maxThreads'      => 'MaxThreads',
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
        if (null !== $this->URIEncoding) {
            $res['URIEncoding'] = $this->URIEncoding;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }
        if (null !== $this->maxThreads) {
            $res['MaxThreads'] = $this->maxThreads;
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
        if (isset($map['URIEncoding'])) {
            $model->URIEncoding = $map['URIEncoding'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }
        if (isset($map['MaxThreads'])) {
            $model->maxThreads = $map['MaxThreads'];
        }

        return $model;
    }
}
