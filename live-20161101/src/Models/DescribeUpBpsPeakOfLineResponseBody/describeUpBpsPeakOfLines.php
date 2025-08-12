<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineResponseBody\describeUpBpsPeakOfLines\describeUpBpsPeakOfLine;

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
        if (\is_array($this->describeUpBpsPeakOfLine)) {
            Model::validateArray($this->describeUpBpsPeakOfLine);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describeUpBpsPeakOfLine) {
            if (\is_array($this->describeUpBpsPeakOfLine)) {
                $res['DescribeUpBpsPeakOfLine'] = [];
                $n1 = 0;
                foreach ($this->describeUpBpsPeakOfLine as $item1) {
                    $res['DescribeUpBpsPeakOfLine'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DescribeUpBpsPeakOfLine'])) {
            if (!empty($map['DescribeUpBpsPeakOfLine'])) {
                $model->describeUpBpsPeakOfLine = [];
                $n1 = 0;
                foreach ($map['DescribeUpBpsPeakOfLine'] as $item1) {
                    $model->describeUpBpsPeakOfLine[$n1] = describeUpBpsPeakOfLine::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
