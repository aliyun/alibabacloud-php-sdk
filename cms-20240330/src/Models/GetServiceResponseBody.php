<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceResponseBody\service;
use AlibabaCloud\Tea\Model;

class GetServiceResponseBody extends Model
{
    /**
     * @example 264C3E89-BE6E-5F82-A484-CE9C2196C7DC
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->service) {
            $res['service'] = null !== $this->service ? $this->service->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceResponseBody
     */
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
