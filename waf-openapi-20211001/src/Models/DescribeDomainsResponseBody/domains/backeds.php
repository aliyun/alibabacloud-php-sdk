<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody\domains;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody\domains\backeds\http;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody\domains\backeds\https;
use AlibabaCloud\Tea\Model;

class backeds extends Model
{
    /**
     * @description The HTTP addresses of the origin server.
     *
     * @var http[]
     */
    public $http;

    /**
     * @description The HTTPS addresses of the origin server.
     *
     * @var https[]
     */
    public $https;
    protected $_name = [
        'http'  => 'Http',
        'https' => 'Https',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->http) {
            $res['Http'] = [];
            if (null !== $this->http && \is_array($this->http)) {
                $n = 0;
                foreach ($this->http as $item) {
                    $res['Http'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->https) {
            $res['Https'] = [];
            if (null !== $this->https && \is_array($this->https)) {
                $n = 0;
                foreach ($this->https as $item) {
                    $res['Https'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backeds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Http'])) {
            if (!empty($map['Http'])) {
                $model->http = [];
                $n           = 0;
                foreach ($map['Http'] as $item) {
                    $model->http[$n++] = null !== $item ? http::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Https'])) {
            if (!empty($map['Https'])) {
                $model->https = [];
                $n            = 0;
                foreach ($map['Https'] as $item) {
                    $model->https[$n++] = null !== $item ? https::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
