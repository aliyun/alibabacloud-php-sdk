<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\Probe\probeHandler;

use AlibabaCloud\SDK\Sae\V20190506\Models\Probe\probeHandler\httpGet\httpHeaders;
use AlibabaCloud\Tea\Model;

class httpGet extends Model
{
    /**
     * @var httpHeaders[]
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
    protected $_name = [
        'httpHeaders' => 'httpHeaders',
        'path'        => 'path',
        'port'        => 'port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpHeaders) {
            $res['httpHeaders'] = [];
            if (null !== $this->httpHeaders && \is_array($this->httpHeaders)) {
                $n = 0;
                foreach ($this->httpHeaders as $item) {
                    $res['httpHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
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
        if (isset($map['httpHeaders'])) {
            if (!empty($map['httpHeaders'])) {
                $model->httpHeaders = [];
                $n                  = 0;
                foreach ($map['httpHeaders'] as $item) {
                    $model->httpHeaders[$n++] = null !== $item ? httpHeaders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        return $model;
    }
}
