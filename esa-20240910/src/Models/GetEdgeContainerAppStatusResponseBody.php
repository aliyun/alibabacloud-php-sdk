<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppStatusResponseBody\appStatus;
use AlibabaCloud\Tea\Model;

class GetEdgeContainerAppStatusResponseBody extends Model
{
    /**
     * @description The status of the application.
     *
     * @var appStatus
     */
    public $appStatus;

    /**
     * @description The request ID.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247B78
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appStatus' => 'AppStatus',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appStatus) {
            $res['AppStatus'] = null !== $this->appStatus ? $this->appStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEdgeContainerAppStatusResponseBody
     */
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
