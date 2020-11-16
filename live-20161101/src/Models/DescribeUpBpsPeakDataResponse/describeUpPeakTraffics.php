<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponse\describeUpPeakTraffics\describeUpPeakTraffic;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('describeUpPeakTraffic', $this->describeUpPeakTraffic, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeUpPeakTraffic) {
            $res['DescribeUpPeakTraffic'] = [];
            if (null !== $this->describeUpPeakTraffic && \is_array($this->describeUpPeakTraffic)) {
                $n = 0;
                foreach ($this->describeUpPeakTraffic as $item) {
                    $res['DescribeUpPeakTraffic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeUpPeakTraffics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeUpPeakTraffic'])) {
            if (!empty($map['DescribeUpPeakTraffic'])) {
                $model->describeUpPeakTraffic = [];
                $n                            = 0;
                foreach ($map['DescribeUpPeakTraffic'] as $item) {
                    $model->describeUpPeakTraffic[$n++] = null !== $item ? describeUpPeakTraffic::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
