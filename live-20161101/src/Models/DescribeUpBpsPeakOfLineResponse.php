<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineResponse\describeUpBpsPeakOfLines;
use AlibabaCloud\Tea\Model;

class DescribeUpBpsPeakOfLineResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var describeUpBpsPeakOfLines
     */
    public $describeUpBpsPeakOfLines;
    protected $_name = [
        'requestId'                => 'RequestId',
        'describeUpBpsPeakOfLines' => 'DescribeUpBpsPeakOfLines',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('describeUpBpsPeakOfLines', $this->describeUpBpsPeakOfLines, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->describeUpBpsPeakOfLines) {
            $res['DescribeUpBpsPeakOfLines'] = null !== $this->describeUpBpsPeakOfLines ? $this->describeUpBpsPeakOfLines->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpBpsPeakOfLineResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DescribeUpBpsPeakOfLines'])) {
            $model->describeUpBpsPeakOfLines = describeUpBpsPeakOfLines::fromMap($map['DescribeUpBpsPeakOfLines']);
        }

        return $model;
    }
}
