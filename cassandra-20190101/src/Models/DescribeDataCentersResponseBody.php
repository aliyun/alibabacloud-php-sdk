<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeDataCentersResponseBody\dataCenters;
use AlibabaCloud\Tea\Model;

class DescribeDataCentersResponseBody extends Model
{
    /**
     * @var dataCenters
     */
    public $dataCenters;

    /**
     * @example C8CA4D25-47FE-47D9-A34F-69B554A3A069
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataCenters' => 'DataCenters',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCenters) {
            $res['DataCenters'] = null !== $this->dataCenters ? $this->dataCenters->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataCentersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCenters'])) {
            $model->dataCenters = dataCenters::fromMap($map['DataCenters']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
