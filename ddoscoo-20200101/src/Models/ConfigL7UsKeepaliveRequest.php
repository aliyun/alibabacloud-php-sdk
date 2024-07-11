<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigL7UsKeepaliveRequest extends Model
{
    /**
     * @description The domain name of the website.
     *
     * >  A forwarding rule must be configured for the domain name. You can call the [DescribeDomains](https://help.aliyun.com/document_detail/91724.html) operation to query all domain names.
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The settings for back-to-origin persistent connections. The value is a string that consists of a JSON struct. The JSON struct contains the following fields:
     *
     *   **enabled**: the switch for back-to-origin persistent connections. This field is required, and the value is of the Boolean type.
     *   **keepalive_requests**: the number of requests that reuse a persistent connection. This field is required, and the value is of the integer type.
     *   **keepalive_timeout**: the timeout period for an idle persistent connection. This field is required, and the value is of the integer type.
     *
     * This parameter is required.
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
