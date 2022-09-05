<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateIntegrationResponseBody\integration;
use AlibabaCloud\Tea\Model;

class UpdateIntegrationResponseBody extends Model
{
    /**
     * @var integration
     */
    public $integration;

    /**
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
     * @return UpdateIntegrationResponseBody
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
