<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveStatisticsResponseBody\dataPoints;
use AlibabaCloud\Tea\Model;

class GetResolveStatisticsResponseBody extends Model
{
    /**
     * @var dataPoints
     */
    public $dataPoints;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataPoints' => 'DataPoints',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPoints) {
            $res['DataPoints'] = null !== $this->dataPoints ? $this->dataPoints->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResolveStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPoints'])) {
            $model->dataPoints = dataPoints::fromMap($map['DataPoints']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
