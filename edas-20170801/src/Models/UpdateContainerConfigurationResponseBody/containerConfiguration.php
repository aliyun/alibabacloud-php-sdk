<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class containerConfiguration extends Model
{
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
    public $URIEncoding;

    /**
     * @var bool
     */
    public $useBodyEncoding;
    protected $_name = [
        'contextPath' => 'ContextPath',
        'httpPort' => 'HttpPort',
        'maxThreads' => 'MaxThreads',
        'URIEncoding' => 'URIEncoding',
        'useBodyEncoding' => 'UseBodyEncoding',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
