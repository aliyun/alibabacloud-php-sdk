<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiFallbackConfig\serviceConfigs;

class aiFallbackConfig extends Model
{
    /**
     * @var bool
     */
    public $onlyRedirectUpstreamCode;

    /**
     * @var bool
     */
    public $routeEmbedded;

    /**
     * @var serviceConfigs[]
     */
    public $serviceConfigs;
    protected $_name = [
        'onlyRedirectUpstreamCode' => 'onlyRedirectUpstreamCode',
        'routeEmbedded' => 'routeEmbedded',
        'serviceConfigs' => 'serviceConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->serviceConfigs)) {
            Model::validateArray($this->serviceConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onlyRedirectUpstreamCode) {
            $res['onlyRedirectUpstreamCode'] = $this->onlyRedirectUpstreamCode;
        }

        if (null !== $this->routeEmbedded) {
            $res['routeEmbedded'] = $this->routeEmbedded;
        }

        if (null !== $this->serviceConfigs) {
            if (\is_array($this->serviceConfigs)) {
                $res['serviceConfigs'] = [];
                $n1 = 0;
                foreach ($this->serviceConfigs as $item1) {
                    $res['serviceConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['onlyRedirectUpstreamCode'])) {
            $model->onlyRedirectUpstreamCode = $map['onlyRedirectUpstreamCode'];
        }

        if (isset($map['routeEmbedded'])) {
            $model->routeEmbedded = $map['routeEmbedded'];
        }

        if (isset($map['serviceConfigs'])) {
            if (!empty($map['serviceConfigs'])) {
                $model->serviceConfigs = [];
                $n1 = 0;
                foreach ($map['serviceConfigs'] as $item1) {
                    $model->serviceConfigs[$n1] = serviceConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
