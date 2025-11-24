<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart\httpGet\httpHeaders;

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
        'host' => 'host',
        'httpHeaders' => 'httpHeaders',
        'port' => 'port',
        'scheme' => 'scheme',
    ];

    public function validate()
    {
        if (\is_array($this->httpHeaders)) {
            Model::validateArray($this->httpHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->httpHeaders) {
            if (\is_array($this->httpHeaders)) {
                $res['httpHeaders'] = [];
                $n1 = 0;
                foreach ($this->httpHeaders as $item1) {
                    $res['httpHeaders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['httpHeaders'])) {
            if (!empty($map['httpHeaders'])) {
                $model->httpHeaders = [];
                $n1 = 0;
                foreach ($map['httpHeaders'] as $item1) {
                    $model->httpHeaders[$n1] = httpHeaders::fromMap($item1);
                    ++$n1;
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
