<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppStatusResponseBody\appStatus;

class GetEdgeContainerAppStatusResponseBody extends Model
{
    /**
     * @var appStatus
     */
    public $appStatus;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appStatus' => 'AppStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appStatus) {
            $this->appStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appStatus) {
            $res['AppStatus'] = null !== $this->appStatus ? $this->appStatus->toArray($noStream) : $this->appStatus;
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
        if (isset($map['AppStatus'])) {
            $model->appStatus = appStatus::fromMap($map['AppStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
