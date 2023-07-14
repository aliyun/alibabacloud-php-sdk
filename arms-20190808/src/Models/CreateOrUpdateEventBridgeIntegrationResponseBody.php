<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateEventBridgeIntegrationResponseBody\eventBridgeIntegration;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateEventBridgeIntegrationResponseBody extends Model
{
    /**
     * @description The information about the EventBridge integration.
     *
     * @var eventBridgeIntegration
     */
    public $eventBridgeIntegration;

    /**
     * @description The request ID.
     *
     * @example 2B289756-E791-5842-BCBD-AD414C******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventBridgeIntegration' => 'EventBridgeIntegration',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBridgeIntegration) {
            $res['EventBridgeIntegration'] = null !== $this->eventBridgeIntegration ? $this->eventBridgeIntegration->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateEventBridgeIntegrationResponseBody
     */
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
