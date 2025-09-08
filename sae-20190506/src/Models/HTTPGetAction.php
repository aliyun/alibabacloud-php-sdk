<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class HTTPGetAction extends Model
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var HTTPHeader[]
     */
    public $httpHeaders;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $scheme;
    protected $_name = [
        'host' => 'Host',
        'httpHeaders' => 'HttpHeaders',
        'path' => 'Path',
        'port' => 'Port',
        'scheme' => 'Scheme',
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
            $res['Host'] = $this->host;
        }

        if (null !== $this->httpHeaders) {
            if (\is_array($this->httpHeaders)) {
                $res['HttpHeaders'] = [];
                $n1 = 0;
                foreach ($this->httpHeaders as $item1) {
                    $res['HttpHeaders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->scheme) {
            $res['Scheme'] = $this->scheme;
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
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['HttpHeaders'])) {
            if (!empty($map['HttpHeaders'])) {
                $model->httpHeaders = [];
                $n1 = 0;
                foreach ($map['HttpHeaders'] as $item1) {
                    $model->httpHeaders[$n1] = HTTPHeader::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
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
