<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatResponseBody\barChart;

class GetOssCheckStatResponseBody extends Model
{
    /**
     * @var barChart
     */
    public $barChart;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'barChart' => 'BarChart',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->barChart) {
            $this->barChart->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->barChart) {
            $res['BarChart'] = null !== $this->barChart ? $this->barChart->toArray($noStream) : $this->barChart;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
