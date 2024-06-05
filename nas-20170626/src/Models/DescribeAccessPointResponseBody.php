<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody\accessPoint;
use AlibabaCloud\Tea\Model;

class DescribeAccessPointResponseBody extends Model
{
    /**
     * @var accessPoint
     */
    public $accessPoint;

    /**
     * @description This parameter is required.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessPoint' => 'AccessPoint',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPoint) {
            $res['AccessPoint'] = null !== $this->accessPoint ? $this->accessPoint->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccessPointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPoint'])) {
            $model->accessPoint = accessPoint::fromMap($map['AccessPoint']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
