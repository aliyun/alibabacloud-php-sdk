<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\matchRequest;

use AlibabaCloud\Dara\Model;

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
        'TLSPort' => 'TLSPort',
    ];

    public function validate()
    {
        if (\is_array($this->SNIHosts)) {
            Model::validateArray($this->SNIHosts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SNIHosts) {
            if (\is_array($this->SNIHosts)) {
                $res['SNIHosts'] = [];
                $n1 = 0;
                foreach ($this->SNIHosts as $item1) {
                    $res['SNIHosts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->TLSPort) {
            $res['TLSPort'] = $this->TLSPort;
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
        if (isset($map['SNIHosts'])) {
            if (!empty($map['SNIHosts'])) {
                $model->SNIHosts = [];
                $n1 = 0;
                foreach ($map['SNIHosts'] as $item1) {
                    $model->SNIHosts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TLSPort'])) {
            $model->TLSPort = $map['TLSPort'];
        }

        return $model;
    }
}
