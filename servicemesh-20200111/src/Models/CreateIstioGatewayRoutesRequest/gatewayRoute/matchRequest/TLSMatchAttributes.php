<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute\matchRequest;

use AlibabaCloud\Tea\Model;

class TLSMatchAttributes extends Model
{
    /**
     * @var string[]
     */
    public $SNIHosts;

    /**
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
