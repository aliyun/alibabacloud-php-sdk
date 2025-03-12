<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetServiceTrailResponseBody\serviceTrail;
use AlibabaCloud\Tea\Model;

class GetServiceTrailResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example C699E4E4-F2F4-58FC-A949-457FFE59****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The configurations of the service trail.
     *
     * @var serviceTrail
     */
    public $serviceTrail;
    protected $_name = [
        'requestId'    => 'RequestId',
        'serviceTrail' => 'ServiceTrail',
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
        if (null !== $this->serviceTrail) {
            $res['ServiceTrail'] = null !== $this->serviceTrail ? $this->serviceTrail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceTrailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceTrail'])) {
            $model->serviceTrail = serviceTrail::fromMap($map['ServiceTrail']);
        }

        return $model;
    }
}
