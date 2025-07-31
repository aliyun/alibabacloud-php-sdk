<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatResponseBody\barChart;
use AlibabaCloud\Tea\Model;

class GetOssCheckStatResponseBody extends Model
{
    /**
     * @var barChart
     */
    public $barChart;

    /**
     * @example AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'barChart' => 'BarChart',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->barChart) {
            $res['BarChart'] = null !== $this->barChart ? $this->barChart->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssCheckStatResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BarChart'])) {
            $model->barChart = barChart::fromMap($map['BarChart']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
