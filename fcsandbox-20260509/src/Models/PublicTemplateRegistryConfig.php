<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class PublicTemplateRegistryConfig extends Model
{
    /**
     * @var PublicTemplateRegistryNetworkConfig
     */
    public $networkConfig;
    protected $_name = [
        'networkConfig' => 'networkConfig',
    ];

    public function validate()
    {
        if (null !== $this->networkConfig) {
            $this->networkConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toArray($noStream) : $this->networkConfig;
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
        if (isset($map['networkConfig'])) {
            $model->networkConfig = PublicTemplateRegistryNetworkConfig::fromMap($map['networkConfig']);
        }

        return $model;
    }
}
