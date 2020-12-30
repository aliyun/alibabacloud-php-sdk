<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints;
use AlibabaCloud\Tea\Model;

class DescribeContactPointsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var contactPoints
     */
    public $contactPoints;
    protected $_name = [
        'requestId'     => 'RequestId',
        'contactPoints' => 'ContactPoints',
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
        if (null !== $this->contactPoints) {
            $res['ContactPoints'] = null !== $this->contactPoints ? $this->contactPoints->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ContactPoints'])) {
            $model->contactPoints = contactPoints::fromMap($map['ContactPoints']);
        }

        return $model;
    }
}
