<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetChatRoutingProfileResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentConcurrencySettings;

    /**
     * @var string
     */
    public $chatSettings;

    /**
     * @var string
     */
    public $distributionSettings;

    /**
     * @var string
     */
    public $routingType;
    protected $_name = [
        'agentConcurrencySettings' => 'AgentConcurrencySettings',
        'chatSettings' => 'ChatSettings',
        'distributionSettings' => 'DistributionSettings',
        'routingType' => 'RoutingType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentConcurrencySettings) {
            $res['AgentConcurrencySettings'] = $this->agentConcurrencySettings;
        }

        if (null !== $this->chatSettings) {
            $res['ChatSettings'] = $this->chatSettings;
        }

        if (null !== $this->distributionSettings) {
            $res['DistributionSettings'] = $this->distributionSettings;
        }

        if (null !== $this->routingType) {
            $res['RoutingType'] = $this->routingType;
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
        if (isset($map['AgentConcurrencySettings'])) {
            $model->agentConcurrencySettings = $map['AgentConcurrencySettings'];
        }

        if (isset($map['ChatSettings'])) {
            $model->chatSettings = $map['ChatSettings'];
        }

        if (isset($map['DistributionSettings'])) {
            $model->distributionSettings = $map['DistributionSettings'];
        }

        if (isset($map['RoutingType'])) {
            $model->routingType = $map['RoutingType'];
        }

        return $model;
    }
}
