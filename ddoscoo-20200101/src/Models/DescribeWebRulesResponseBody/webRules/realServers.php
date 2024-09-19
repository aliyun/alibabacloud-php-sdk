<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules;

use AlibabaCloud\Tea\Model;

class realServers extends Model
{
    /**
     * @description The address of the origin server.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $realServer;

    /**
     * @description The type of the origin server address. Valid values:
     *
     *   **0**: IP address
     *   **1**: domain name The domain name of the origin server is returned if you deploy proxies, such as Web Application Firewall (WAF), between the origin server and the instance. In this case, the address of the proxy, such as the CNAME provided by WAF, is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $rsType;
    protected $_name = [
        'realServer' => 'RealServer',
        'rsType'     => 'RsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realServer) {
            $res['RealServer'] = $this->realServer;
        }
        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RealServer'])) {
            $model->realServer = $map['RealServer'];
        }
        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }

        return $model;
    }
}
