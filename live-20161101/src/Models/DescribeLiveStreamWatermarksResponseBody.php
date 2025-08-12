<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksResponseBody\watermarkList;

class DescribeLiveStreamWatermarksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var watermarkList
     */
    public $watermarkList;
    protected $_name = [
        'requestId' => 'RequestId',
        'total' => 'Total',
        'watermarkList' => 'WatermarkList',
    ];

    public function validate()
    {
        if (null !== $this->watermarkList) {
            $this->watermarkList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->watermarkList) {
            $res['WatermarkList'] = null !== $this->watermarkList ? $this->watermarkList->toArray($noStream) : $this->watermarkList;
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
