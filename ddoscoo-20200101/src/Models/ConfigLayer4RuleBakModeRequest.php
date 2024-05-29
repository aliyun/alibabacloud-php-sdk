<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigLayer4RuleBakModeRequest extends Model
{
    /**
     * @description The mode that you want to use to forward service traffic. Valid values:
     *
     *   **0**: the default mode. In this mode, Anti-DDoS Pro or Anti-DDoS Premium forwards service traffic to the origin IP address that you specified when you created the port forwarding rule. You can call the [CreateNetworkRules](https://help.aliyun.com/document_detail/157482.html) operation to create a port forwarding rule.
     *   **1**: the origin redundancy mode. In this mode, Anti-DDoS Pro or Anti-DDoS Premium forwards service traffic to the IP addresses of the primary or secondary origin servers. You can call the [ConfigLayer4RulePolicy](https://help.aliyun.com/document_detail/312684.html) operation to configure IP addresses.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $bakMode;

    /**
     * @description The port forwarding rule that you want to manage.
     *
     * Each port forwarding rule contains the following fields:
     *
     *   **InstanceId**: the ID of the instance. This field is required and must be of the STRING type.
     *   **Protocol**: the forwarding protocol. This field is required and must be of the STRING type. Valid values: **tcp** and **udp**.
     *   **FrontendPort**: the forwarding port. This field is required and must be of the INTEGER type.
     *
     * This parameter is required.
     * @example [{\\"InstanceId\\":\\"ddosDip-sg-4hr2b3l****\\",\\"FrontendPort\\":2020,\\"Protocol\\":\\"udp\\"}]
     *
     * @var string
     */
    public $listeners;
    protected $_name = [
        'bakMode'   => 'BakMode',
        'listeners' => 'Listeners',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bakMode) {
            $res['BakMode'] = $this->bakMode;
        }
        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigLayer4RuleBakModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BakMode'])) {
            $model->bakMode = $map['BakMode'];
        }
        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }

        return $model;
    }
}
