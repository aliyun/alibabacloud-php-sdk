<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetRegisteredServicesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $services;
    protected $_name = [
        'requestId' => 'RequestId',
        'services'  => 'Services',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->services) {
            $res['Services'] = $this->services;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRegisteredServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = $map['Services'];
            }
        }

        return $model;
    }
}
