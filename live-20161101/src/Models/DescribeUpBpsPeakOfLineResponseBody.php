<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineResponseBody\describeUpBpsPeakOfLines;
use AlibabaCloud\Tea\Model;

class DescribeUpBpsPeakOfLineResponseBody extends Model
{
    /**
     * @description The information about peak inbound bandwidth of the leased line on each day.
     *
     * @var describeUpBpsPeakOfLines
     */
    public $describeUpBpsPeakOfLines;

    /**
     * @description The request ID.
     *
     * @example 6CFDE7AB-571A-14EA-B072-989FF753****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describeUpBpsPeakOfLines' => 'DescribeUpBpsPeakOfLines',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeUpBpsPeakOfLines) {
            $res['DescribeUpBpsPeakOfLines'] = null !== $this->describeUpBpsPeakOfLines ? $this->describeUpBpsPeakOfLines->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpBpsPeakOfLineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeUpBpsPeakOfLines'])) {
            $model->describeUpBpsPeakOfLines = describeUpBpsPeakOfLines::fromMap($map['DescribeUpBpsPeakOfLines']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
