<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class TomcatConfig extends Model
{
    /**
     * @var string
     */
    public $contextPath;

    /**
     * @var int
     */
    public $maxThreads;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $uriEncoding;

    /**
     * @var bool
     */
    public $useBodyEncodingForUri;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'contextPath'           => 'ContextPath',
        'maxThreads'            => 'MaxThreads',
        'port'                  => 'Port',
        'uriEncoding'           => 'UriEncoding',
        'useBodyEncodingForUri' => 'UseBodyEncodingForUri',
        'version'               => 'Version',
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
        if (null !== $this->maxThreads) {
            $res['MaxThreads'] = $this->maxThreads;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->uriEncoding) {
            $res['UriEncoding'] = $this->uriEncoding;
        }
        if (null !== $this->useBodyEncodingForUri) {
            $res['UseBodyEncodingForUri'] = $this->useBodyEncodingForUri;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TomcatConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContextPath'])) {
            $model->contextPath = $map['ContextPath'];
        }
        if (isset($map['MaxThreads'])) {
            $model->maxThreads = $map['MaxThreads'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UriEncoding'])) {
            $model->uriEncoding = $map['UriEncoding'];
        }
        if (isset($map['UseBodyEncodingForUri'])) {
            $model->useBodyEncodingForUri = $map['UseBodyEncodingForUri'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
