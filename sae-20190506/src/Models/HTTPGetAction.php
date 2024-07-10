<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'host'        => 'Host',
        'httpHeaders' => 'HttpHeaders',
        'path'        => 'Path',
        'port'        => 'Port',
        'scheme'      => 'Scheme',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->httpHeaders) {
            $res['HttpHeaders'] = [];
            if (null !== $this->httpHeaders && \is_array($this->httpHeaders)) {
                $n = 0;
                foreach ($this->httpHeaders as $item) {
                    $res['HttpHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return HTTPGetAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['HttpHeaders'])) {
            if (!empty($map['HttpHeaders'])) {
                $model->httpHeaders = [];
                $n                  = 0;
                foreach ($map['HttpHeaders'] as $item) {
                    $model->httpHeaders[$n++] = null !== $item ? HTTPHeader::fromMap($item) : $item;
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
