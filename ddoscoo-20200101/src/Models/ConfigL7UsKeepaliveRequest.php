<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigL7UsKeepaliveRequest extends Model
{
    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description This parameter is required.
     *
     * @example {"enabled": true, "keepalive_requests": 1000,"keepalive_timeout": 30}
     *
     * @var string
     */
    public $upstreamKeepalive;
    protected $_name = [
        'domain'            => 'Domain',
        'upstreamKeepalive' => 'UpstreamKeepalive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->upstreamKeepalive) {
            $res['UpstreamKeepalive'] = $this->upstreamKeepalive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigL7UsKeepaliveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['UpstreamKeepalive'])) {
            $model->upstreamKeepalive = $map['UpstreamKeepalive'];
        }

        return $model;
    }
}
