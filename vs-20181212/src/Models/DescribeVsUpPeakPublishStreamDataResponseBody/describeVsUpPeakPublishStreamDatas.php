<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataResponseBody\describeVsUpPeakPublishStreamDatas\describeVsUpPeakPublishStreamData;
use AlibabaCloud\Tea\Model;

class describeVsUpPeakPublishStreamDatas extends Model
{
    /**
     * @var describeVsUpPeakPublishStreamData[]
     */
    public $describeVsUpPeakPublishStreamData;
    protected $_name = [
        'describeVsUpPeakPublishStreamData' => 'DescribeVsUpPeakPublishStreamData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeVsUpPeakPublishStreamData) {
            $res['DescribeVsUpPeakPublishStreamData'] = [];
            if (null !== $this->describeVsUpPeakPublishStreamData && \is_array($this->describeVsUpPeakPublishStreamData)) {
                $n = 0;
                foreach ($this->describeVsUpPeakPublishStreamData as $item) {
                    $res['DescribeVsUpPeakPublishStreamData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeVsUpPeakPublishStreamDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeVsUpPeakPublishStreamData'])) {
            if (!empty($map['DescribeVsUpPeakPublishStreamData'])) {
                $model->describeVsUpPeakPublishStreamData = [];
                $n                                        = 0;
                foreach ($map['DescribeVsUpPeakPublishStreamData'] as $item) {
                    $model->describeVsUpPeakPublishStreamData[$n++] = null !== $item ? describeVsUpPeakPublishStreamData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
