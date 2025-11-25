<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListServicesResponseBody\services;

class ListServicesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var services
     */
    public $services;
    protected $_name = [
        'requestId' => 'RequestId',
        'services' => 'Services',
    ];

    public function validate()
    {
        if (null !== $this->services) {
            $this->services->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->services) {
            $res['Services'] = null !== $this->services ? $this->services->toArray($noStream) : $this->services;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Services'])) {
            $model->services = services::fromMap($map['Services']);
        }

        return $model;
    }
}
