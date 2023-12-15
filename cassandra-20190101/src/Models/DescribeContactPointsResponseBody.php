<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints;
use AlibabaCloud\Tea\Model;

class DescribeContactPointsResponseBody extends Model
{
    /**
     * @var contactPoints
     */
    public $contactPoints;

    /**
     * @example 467F786B-C765-40C4-8493-89F4CE95F1B6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contactPoints' => 'ContactPoints',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactPoints) {
            $res['ContactPoints'] = null !== $this->contactPoints ? $this->contactPoints->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContactPointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactPoints'])) {
            $model->contactPoints = contactPoints::fromMap($map['ContactPoints']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
