<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceResponseBody\service;

class GetServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var service
     */
    public $service;
    protected $_name = [
        'requestId' => 'requestId',
        'service' => 'service',
    ];

    public function validate()
    {
        if (null !== $this->service) {
            $this->service->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->service) {
            $res['service'] = null !== $this->service ? $this->service->toArray($noStream) : $this->service;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['service'])) {
            $model->service = service::fromMap($map['service']);
        }

        return $model;
    }
}
