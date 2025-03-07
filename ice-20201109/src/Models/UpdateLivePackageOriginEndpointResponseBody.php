<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageOriginEndpointResponseBody\livePackageOriginEndpoint;
use AlibabaCloud\Tea\Model;

class UpdateLivePackageOriginEndpointResponseBody extends Model
{
    /**
     * @description The information about the origin endpoint.
     *
     * @var livePackageOriginEndpoint
     */
    public $livePackageOriginEndpoint;

    /**
     * @description The request ID.
     *
     * @example b1f8d6c4-a123-4cd5-9e88-d0819e3bfa70
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'livePackageOriginEndpoint' => 'LivePackageOriginEndpoint',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->livePackageOriginEndpoint) {
            $res['LivePackageOriginEndpoint'] = null !== $this->livePackageOriginEndpoint ? $this->livePackageOriginEndpoint->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLivePackageOriginEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LivePackageOriginEndpoint'])) {
            $model->livePackageOriginEndpoint = livePackageOriginEndpoint::fromMap($map['LivePackageOriginEndpoint']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
