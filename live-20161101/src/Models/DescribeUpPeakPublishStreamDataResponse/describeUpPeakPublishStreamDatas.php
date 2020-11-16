<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataResponse\describeUpPeakPublishStreamDatas\describeUpPeakPublishStreamData;
use AlibabaCloud\Tea\Model;

class describeUpPeakPublishStreamDatas extends Model
{
    /**
     * @var describeUpPeakPublishStreamData[]
     */
    public $describeUpPeakPublishStreamData;
    protected $_name = [
        'describeUpPeakPublishStreamData' => 'DescribeUpPeakPublishStreamData',
    ];

    public function validate()
    {
        Model::validateRequired('describeUpPeakPublishStreamData', $this->describeUpPeakPublishStreamData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeUpPeakPublishStreamData) {
            $res['DescribeUpPeakPublishStreamData'] = [];
            if (null !== $this->describeUpPeakPublishStreamData && \is_array($this->describeUpPeakPublishStreamData)) {
                $n = 0;
                foreach ($this->describeUpPeakPublishStreamData as $item) {
                    $res['DescribeUpPeakPublishStreamData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeUpPeakPublishStreamDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeUpPeakPublishStreamData'])) {
            if (!empty($map['DescribeUpPeakPublishStreamData'])) {
                $model->describeUpPeakPublishStreamData = [];
                $n                                      = 0;
                foreach ($map['DescribeUpPeakPublishStreamData'] as $item) {
                    $model->describeUpPeakPublishStreamData[$n++] = null !== $item ? describeUpPeakPublishStreamData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
