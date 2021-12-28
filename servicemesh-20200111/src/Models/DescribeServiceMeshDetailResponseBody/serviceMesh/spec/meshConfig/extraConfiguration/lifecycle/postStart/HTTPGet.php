<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart\HTTPGet\HTTPHeaders;
use AlibabaCloud\Tea\Model;

class HTTPGet extends Model
{
    /**
     * @var HTTPHeaders[]
     */
    public $HTTPHeaders;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $scheme;
    protected $_name = [
        'HTTPHeaders' => 'HTTPHeaders',
        'host'        => 'Host',
        'port'        => 'Port',
        'scheme'      => 'Scheme',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->HTTPHeaders) {
            $res['HTTPHeaders'] = [];
            if (null !== $this->HTTPHeaders && \is_array($this->HTTPHeaders)) {
                $n = 0;
                foreach ($this->HTTPHeaders as $item) {
                    $res['HTTPHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->scheme) {
            $res['Scheme'] = $this->scheme;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HTTPGet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HTTPHeaders'])) {
            if (!empty($map['HTTPHeaders'])) {
                $model->HTTPHeaders = [];
                $n                  = 0;
                foreach ($map['HTTPHeaders'] as $item) {
                    $model->HTTPHeaders[$n++] = null !== $item ? HTTPHeaders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Scheme'])) {
            $model->scheme = $map['Scheme'];
        }

        return $model;
    }
}
