<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateIntegrationResponseBody\integration;

class CreateIntegrationResponseBody extends Model
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
        if (null !== $this->integration) {
            $this->integration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->integration) {
            $res['Integration'] = null !== $this->integration ? $this->integration->toArray($noStream) : $this->integration;
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
        if (isset($map['Integration'])) {
            $model->integration = integration::fromMap($map['Integration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
