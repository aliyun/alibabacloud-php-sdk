<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\controlPlaneEndpointsConfig\internalDnsConfig;

class controlPlaneEndpointsConfig extends Model
{
    /**
     * @var internalDnsConfig
     */
    public $internalDnsConfig;
    protected $_name = [
        'internalDnsConfig' => 'internal_dns_config',
    ];

    public function validate()
    {
        if (null !== $this->internalDnsConfig) {
            $this->internalDnsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internalDnsConfig) {
            $res['internal_dns_config'] = null !== $this->internalDnsConfig ? $this->internalDnsConfig->toArray($noStream) : $this->internalDnsConfig;
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
        if (isset($map['internal_dns_config'])) {
            $model->internalDnsConfig = internalDnsConfig::fromMap($map['internal_dns_config']);
        }

        return $model;
    }
}
