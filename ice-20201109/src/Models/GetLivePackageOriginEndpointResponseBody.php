<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageOriginEndpointResponseBody\livePackageOriginEndpoint;

class GetLivePackageOriginEndpointResponseBody extends Model
{
    /**
     * @var livePackageOriginEndpoint
     */
    public $livePackageOriginEndpoint;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'livePackageOriginEndpoint' => 'LivePackageOriginEndpoint',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->livePackageOriginEndpoint) {
            $this->livePackageOriginEndpoint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->livePackageOriginEndpoint) {
            $res['LivePackageOriginEndpoint'] = null !== $this->livePackageOriginEndpoint ? $this->livePackageOriginEndpoint->toArray($noStream) : $this->livePackageOriginEndpoint;
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
        if (isset($map['LivePackageOriginEndpoint'])) {
            $model->livePackageOriginEndpoint = livePackageOriginEndpoint::fromMap($map['LivePackageOriginEndpoint']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
