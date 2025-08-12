<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponseBody\describeUpPeakTraffics\describeUpPeakTraffic;

class describeUpPeakTraffics extends Model
{
    /**
     * @var describeUpPeakTraffic[]
     */
    public $describeUpPeakTraffic;
    protected $_name = [
        'describeUpPeakTraffic' => 'DescribeUpPeakTraffic',
    ];

    public function validate()
    {
        if (\is_array($this->describeUpPeakTraffic)) {
            Model::validateArray($this->describeUpPeakTraffic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describeUpPeakTraffic) {
            if (\is_array($this->describeUpPeakTraffic)) {
                $res['DescribeUpPeakTraffic'] = [];
                $n1 = 0;
                foreach ($this->describeUpPeakTraffic as $item1) {
                    $res['DescribeUpPeakTraffic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DescribeUpPeakTraffic'])) {
            if (!empty($map['DescribeUpPeakTraffic'])) {
                $model->describeUpPeakTraffic = [];
                $n1 = 0;
                foreach ($map['DescribeUpPeakTraffic'] as $item1) {
                    $model->describeUpPeakTraffic[$n1] = describeUpPeakTraffic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
