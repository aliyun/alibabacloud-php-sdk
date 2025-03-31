<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResponseBody\app;

class GetEdgeContainerAppResponseBody extends Model
{
    /**
     * @var app
     */
    public $app;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'app' => 'App',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->app) {
            $this->app->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = null !== $this->app ? $this->app->toArray($noStream) : $this->app;
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
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
