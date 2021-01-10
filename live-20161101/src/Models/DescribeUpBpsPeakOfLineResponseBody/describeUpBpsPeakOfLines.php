<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineResponseBody\describeUpBpsPeakOfLines\describeUpBpsPeakOfLine;
use AlibabaCloud\Tea\Model;

class describeUpBpsPeakOfLines extends Model
{
    /**
     * @var describeUpBpsPeakOfLine[]
     */
    public $describeUpBpsPeakOfLine;
    protected $_name = [
        'describeUpBpsPeakOfLine' => 'DescribeUpBpsPeakOfLine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeUpBpsPeakOfLine) {
            $res['DescribeUpBpsPeakOfLine'] = [];
            if (null !== $this->describeUpBpsPeakOfLine && \is_array($this->describeUpBpsPeakOfLine)) {
                $n = 0;
                foreach ($this->describeUpBpsPeakOfLine as $item) {
                    $res['DescribeUpBpsPeakOfLine'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeUpBpsPeakOfLines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeUpBpsPeakOfLine'])) {
            if (!empty($map['DescribeUpBpsPeakOfLine'])) {
                $model->describeUpBpsPeakOfLine = [];
                $n                              = 0;
                foreach ($map['DescribeUpBpsPeakOfLine'] as $item) {
                    $model->describeUpBpsPeakOfLine[$n++] = null !== $item ? describeUpBpsPeakOfLine::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
