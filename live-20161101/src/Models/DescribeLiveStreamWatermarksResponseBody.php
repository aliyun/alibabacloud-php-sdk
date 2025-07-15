<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksResponseBody\watermarkList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamWatermarksResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 5c6a2a0df228-4a64- af62-20e91b9676b3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of watermark templates that meet the specified conditions.
     *
     * @example 100
     *
     * @var int
     */
    public $total;

    /**
     * @description Details of the watermark templates.
     *
     * @var watermarkList
     */
    public $watermarkList;
    protected $_name = [
        'requestId' => 'RequestId',
        'total' => 'Total',
        'watermarkList' => 'WatermarkList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->watermarkList) {
            $res['WatermarkList'] = null !== $this->watermarkList ? $this->watermarkList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamWatermarksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['WatermarkList'])) {
            $model->watermarkList = watermarkList::fromMap($map['WatermarkList']);
        }

        return $model;
    }
}
