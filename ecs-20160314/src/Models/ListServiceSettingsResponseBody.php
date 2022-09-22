<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\ListServiceSettingsResponseBody\cloudAssistantDeliverySettings;
use AlibabaCloud\Tea\Model;

class ListServiceSettingsResponseBody extends Model
{
    /**
     * @var cloudAssistantDeliverySettings
     */
    public $cloudAssistantDeliverySettings;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloudAssistantDeliverySettings' => 'CloudAssistantDeliverySettings',
        'requestId'                      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudAssistantDeliverySettings) {
            $res['CloudAssistantDeliverySettings'] = null !== $this->cloudAssistantDeliverySettings ? $this->cloudAssistantDeliverySettings->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceSettingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudAssistantDeliverySettings'])) {
            $model->cloudAssistantDeliverySettings = cloudAssistantDeliverySettings::fromMap($map['CloudAssistantDeliverySettings']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
