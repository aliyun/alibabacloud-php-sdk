<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy\loadBalancerSettings;
use AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy\tlsSetting;

class TrafficPolicy extends Model
{
    /**
     * @var loadBalancerSettings
     */
    public $loadBalancerSettings;
    /**
     * @var tlsSetting
     */
    public $tlsSetting;
    protected $_name = [
        'loadBalancerSettings' => 'LoadBalancerSettings',
        'tlsSetting'           => 'TlsSetting',
    ];

    public function validate()
    {
        if (null !== $this->loadBalancerSettings) {
            $this->loadBalancerSettings->validate();
        }
        if (null !== $this->tlsSetting) {
            $this->tlsSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadBalancerSettings) {
            $res['LoadBalancerSettings'] = null !== $this->loadBalancerSettings ? $this->loadBalancerSettings->toArray($noStream) : $this->loadBalancerSettings;
        }

        if (null !== $this->tlsSetting) {
            $res['TlsSetting'] = null !== $this->tlsSetting ? $this->tlsSetting->toArray($noStream) : $this->tlsSetting;
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
        if (isset($map['LoadBalancerSettings'])) {
            $model->loadBalancerSettings = loadBalancerSettings::fromMap($map['LoadBalancerSettings']);
        }

        if (isset($map['TlsSetting'])) {
            $model->tlsSetting = tlsSetting::fromMap($map['TlsSetting']);
        }

        return $model;
    }
}
