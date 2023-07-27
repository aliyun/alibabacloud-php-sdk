<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions;

use AlibabaCloud\Tea\Model;

class rewrite extends Model
{
    /**
     * @description The value to be used to overwrite the value of the Authority or Host header.
     *
     * @example newratings.default.svc.cluster.local
     *
     * @var string
     */
    public $authority;

    /**
     * @description The value to be used to overwrite the path or prefix of the URI.
     *
     * @example /v1/getProductRatings
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'authority' => 'Authority',
        'uri'       => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authority) {
            $res['Authority'] = $this->authority;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rewrite
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authority'])) {
            $model->authority = $map['Authority'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
