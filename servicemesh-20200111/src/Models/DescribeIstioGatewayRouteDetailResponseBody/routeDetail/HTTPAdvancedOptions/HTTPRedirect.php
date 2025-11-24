<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions;

use AlibabaCloud\Dara\Model;

class HTTPRedirect extends Model
{
    /**
     * @var string
     */
    public $authority;

    /**
     * @var int
     */
    public $redirectCode;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'authority' => 'Authority',
        'redirectCode' => 'RedirectCode',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authority) {
            $res['Authority'] = $this->authority;
        }

        if (null !== $this->redirectCode) {
            $res['RedirectCode'] = $this->redirectCode;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['Authority'])) {
            $model->authority = $map['Authority'];
        }

        if (isset($map['RedirectCode'])) {
            $model->redirectCode = $map['RedirectCode'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
