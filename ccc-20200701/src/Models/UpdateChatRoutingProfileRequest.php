<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class UpdateChatRoutingProfileRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 9cfad875-6260-4a53-ab6e-b13e3fb31f7d
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example {
     * "RoutingType": "Automatic",
     * "AgentConcurrencySettings": {
     * "AllowExceedingLimitWhenTransferring": false,
     * "ConcurrencyLimit": 4,
     * "AllowExceedingLimitWhenClaiming": true,
     * "Enabled": true
     * },
     * "ChatSettings": {
     * "IdleChatTimeoutSeconds": 300
     * },
     * "DistributionSettings": {
     * "Enabled": true,
     * "AgentRingTimeoutSeconds": 119,
     * "MaxNumberOfConversationsAgentCanMiss": 5,
     * "PostAgentMissingConversionsAction": "Nothing"
     * }
     * }
     *
     * @var string
     */
    public $routingProfiles;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'routingProfiles' => 'RoutingProfiles',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->routingProfiles) {
            $res['RoutingProfiles'] = $this->routingProfiles;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateChatRoutingProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RoutingProfiles'])) {
            $model->routingProfiles = $map['RoutingProfiles'];
        }

        return $model;
    }
}
