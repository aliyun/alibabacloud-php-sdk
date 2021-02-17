<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceMonitorResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $granularity;
    protected $_name = [
        'requestId'   => 'RequestId',
        'granularity' => 'Granularity',
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
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }

        return $model;
    }
}
