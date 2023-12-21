<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class ReportABMetricGroupResponseBody extends Model
{
    /**
     * @var ExperimentReportValue[]
     */
    public $experimentReport;

    /**
     * @var string[]
     */
    public $groupDimension;

    /**
     * @example 59CE7EC6-F268-5D71-9215-32922CC50D72
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'experimentReport' => 'ExperimentReport',
        'groupDimension'   => 'GroupDimension',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentReport) {
            $res['ExperimentReport'] = [];
            if (null !== $this->experimentReport && \is_array($this->experimentReport)) {
                foreach ($this->experimentReport as $key => $val) {
                    $res['ExperimentReport'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->groupDimension) {
            $res['GroupDimension'] = $this->groupDimension;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportABMetricGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentReport'])) {
            $model->experimentReport = $map['ExperimentReport'];
        }
        if (isset($map['GroupDimension'])) {
            if (!empty($map['GroupDimension'])) {
                $model->groupDimension = $map['GroupDimension'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
