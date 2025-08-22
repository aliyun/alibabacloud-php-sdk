<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateEventBridgeIntegrationResponseBody\eventBridgeIntegration;

class CreateOrUpdateEventBridgeIntegrationResponseBody extends Model
{
    /**
     * @var eventBridgeIntegration
     */
    public $eventBridgeIntegration;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventBridgeIntegration' => 'EventBridgeIntegration',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->eventBridgeIntegration) {
            $this->eventBridgeIntegration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventBridgeIntegration) {
            $res['EventBridgeIntegration'] = null !== $this->eventBridgeIntegration ? $this->eventBridgeIntegration->toArray($noStream) : $this->eventBridgeIntegration;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EventBridgeIntegration'])) {
            $model->eventBridgeIntegration = eventBridgeIntegration::fromMap($map['EventBridgeIntegration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
