<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\matchRequest;

use AlibabaCloud\Tea\Model;

class TLSMatchAttributes extends Model
{
    /**
     * @description The name of the service defined in the service registry.
     *
     * @var string[]
     */
    public $SNIHosts;

    /**
     * @description The unique endpoint of the service instance to which the specified requests are sent.
     *
     * @example 443
     *
     * @var int
     */
    public $TLSPort;
    protected $_name = [
        'SNIHosts' => 'SNIHosts',
        'TLSPort'  => 'TLSPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SNIHosts) {
            $res['SNIHosts'] = $this->SNIHosts;
        }
        if (null !== $this->TLSPort) {
            $res['TLSPort'] = $this->TLSPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TLSMatchAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SNIHosts'])) {
            if (!empty($map['SNIHosts'])) {
                $model->SNIHosts = $map['SNIHosts'];
            }
        }
        if (isset($map['TLSPort'])) {
            $model->TLSPort = $map['TLSPort'];
        }

        return $model;
    }
}
