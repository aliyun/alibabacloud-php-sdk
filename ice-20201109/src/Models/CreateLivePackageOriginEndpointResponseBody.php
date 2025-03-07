<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageOriginEndpointResponseBody\livePackageOriginEndpoint;
use AlibabaCloud\Tea\Model;

class CreateLivePackageOriginEndpointResponseBody extends Model
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
     * @example ******11-DB8D-4A9A-875B-275798******
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
     * @return CreateLivePackageOriginEndpointResponseBody
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
