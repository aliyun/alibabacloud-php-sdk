<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessPointResponseBody\accessPoint;
use AlibabaCloud\Tea\Model;

class CreateAccessPointResponseBody extends Model
{
    /**
     * @var accessPoint
     */
    public $accessPoint;

    /**
     * @example 98696EF0-1607-4E9D-B01D-F20930B6****
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
     * @return CreateAccessPointResponseBody
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
