<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceMonitorResponseBody extends Model
{
    /**
     * @description The collection frequency of monitoring data for the instance. Valid value: **5**. Unit: seconds.
     *
     * @example 5
     *
     * @var string
     */
    public $granularity;

    /**
     * @description The request ID.
     *
     * @example EFD65226-08CC-4C4D-B6A4-CB3C382F67B0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'granularity' => 'Granularity',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
