<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksResponseBody\watermarkList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamWatermarksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var watermarkList
     */
    public $watermarkList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'watermarkList' => 'WatermarkList',
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
        if (isset($map['WatermarkList'])) {
            $model->watermarkList = watermarkList::fromMap($map['WatermarkList']);
        }

        return $model;
    }
}
