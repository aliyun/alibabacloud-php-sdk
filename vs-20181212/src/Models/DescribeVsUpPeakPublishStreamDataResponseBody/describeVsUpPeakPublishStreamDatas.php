<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataResponseBody\describeVsUpPeakPublishStreamDatas\describeVsUpPeakPublishStreamData;

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
        if (\is_array($this->describeVsUpPeakPublishStreamData)) {
            Model::validateArray($this->describeVsUpPeakPublishStreamData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describeVsUpPeakPublishStreamData) {
            if (\is_array($this->describeVsUpPeakPublishStreamData)) {
                $res['DescribeVsUpPeakPublishStreamData'] = [];
                $n1 = 0;
                foreach ($this->describeVsUpPeakPublishStreamData as $item1) {
                    $res['DescribeVsUpPeakPublishStreamData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DescribeVsUpPeakPublishStreamData'])) {
            if (!empty($map['DescribeVsUpPeakPublishStreamData'])) {
                $model->describeVsUpPeakPublishStreamData = [];
                $n1 = 0;
                foreach ($map['DescribeVsUpPeakPublishStreamData'] as $item1) {
                    $model->describeVsUpPeakPublishStreamData[$n1++] = describeVsUpPeakPublishStreamData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
