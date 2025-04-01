<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\Probe\probeHandler;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\Probe\probeHandler\httpGet\httpHeaders;

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
        'path' => 'path',
        'port' => 'port',
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
        if (null !== $this->httpHeaders) {
            if (\is_array($this->httpHeaders)) {
                $res['httpHeaders'] = [];
                $n1 = 0;
                foreach ($this->httpHeaders as $item1) {
                    $res['httpHeaders'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['httpHeaders'])) {
            if (!empty($map['httpHeaders'])) {
                $model->httpHeaders = [];
                $n1 = 0;
                foreach ($map['httpHeaders'] as $item1) {
                    $model->httpHeaders[$n1++] = httpHeaders::fromMap($item1);
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
