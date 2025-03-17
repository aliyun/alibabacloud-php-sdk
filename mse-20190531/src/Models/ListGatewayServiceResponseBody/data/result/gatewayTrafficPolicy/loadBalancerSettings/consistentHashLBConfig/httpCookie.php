<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy\loadBalancerSettings\consistentHashLBConfig;

use AlibabaCloud\Tea\Model;

class httpCookie extends Model
{
    /**
     * @description The name of the cookie.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The path of the cookie.
     *
     * @example /path
     *
     * @var string
     */
    public $path;

    /**
     * @description The lifecycle of the cookie.
     *
     * @example 360
     *
     * @var string
     */
    public $ttl;
    protected $_name = [
        'name' => 'Name',
        'path' => 'Path',
        'ttl' => 'Ttl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpCookie
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
