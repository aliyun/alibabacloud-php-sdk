<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\preStop;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\preStop\httpGet\httpHeaders;
use AlibabaCloud\Tea\Model;

class httpGet extends Model
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var httpHeaders[]
     */
    public $httpHeaders;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $scheme;
    protected $_name = [
        'host'        => 'host',
        'httpHeaders' => 'httpHeaders',
        'port'        => 'port',
        'scheme'      => 'scheme',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->httpHeaders) {
            $res['httpHeaders'] = [];
            if (null !== $this->httpHeaders && \is_array($this->httpHeaders)) {
                $n = 0;
                foreach ($this->httpHeaders as $item) {
                    $res['httpHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->scheme) {
            $res['scheme'] = $this->scheme;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpGet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['httpHeaders'])) {
            if (!empty($map['httpHeaders'])) {
                $model->httpHeaders = [];
                $n                  = 0;
                foreach ($map['httpHeaders'] as $item) {
                    $model->httpHeaders[$n++] = null !== $item ? httpHeaders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['scheme'])) {
            $model->scheme = $map['scheme'];
        }

        return $model;
    }
}
