<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataResponseBody\describeUpPeakPublishStreamDatas\describeUpPeakPublishStreamData;

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
        if (\is_array($this->describeUpPeakPublishStreamData)) {
            Model::validateArray($this->describeUpPeakPublishStreamData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describeUpPeakPublishStreamData) {
            if (\is_array($this->describeUpPeakPublishStreamData)) {
                $res['DescribeUpPeakPublishStreamData'] = [];
                $n1 = 0;
                foreach ($this->describeUpPeakPublishStreamData as $item1) {
                    $res['DescribeUpPeakPublishStreamData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DescribeUpPeakPublishStreamData'])) {
            if (!empty($map['DescribeUpPeakPublishStreamData'])) {
                $model->describeUpPeakPublishStreamData = [];
                $n1 = 0;
                foreach ($map['DescribeUpPeakPublishStreamData'] as $item1) {
                    $model->describeUpPeakPublishStreamData[$n1] = describeUpPeakPublishStreamData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
