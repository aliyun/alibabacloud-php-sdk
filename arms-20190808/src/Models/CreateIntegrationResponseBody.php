<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateIntegrationResponseBody\integration;
use AlibabaCloud\Tea\Model;

class CreateIntegrationResponseBody extends Model
{
    /**
     * @description The returned information about the alert integration.
     *
     * @var integration
     */
    public $integration;

    /**
     * @description The ID of the request.
     *
     * @example 34ED024E-9E31-434A-9E4E-D9D15C3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'integration' => 'Integration',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->integration) {
            $res['Integration'] = null !== $this->integration ? $this->integration->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIntegrationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Integration'])) {
            $model->integration = integration::fromMap($map['Integration']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
