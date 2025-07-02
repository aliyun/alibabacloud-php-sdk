<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $requestId;
    protected $_name = [
        'experimentReport' => 'ExperimentReport',
        'groupDimension' => 'GroupDimension',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->experimentReport)) {
            Model::validateArray($this->experimentReport);
        }
        if (\is_array($this->groupDimension)) {
            Model::validateArray($this->groupDimension);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->experimentReport) {
            if (\is_array($this->experimentReport)) {
                $res['ExperimentReport'] = [];
                foreach ($this->experimentReport as $key1 => $value1) {
                    $res['ExperimentReport'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->groupDimension) {
            if (\is_array($this->groupDimension)) {
                $res['GroupDimension'] = [];
                $n1 = 0;
                foreach ($this->groupDimension as $item1) {
                    $res['GroupDimension'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ExperimentReport'])) {
            if (!empty($map['ExperimentReport'])) {
                $model->experimentReport = [];
                foreach ($map['ExperimentReport'] as $key1 => $value1) {
                    $model->experimentReport[$key1] = ExperimentReportValue::fromMap($value1);
                }
            }
        }

        if (isset($map['GroupDimension'])) {
            if (!empty($map['GroupDimension'])) {
                $model->groupDimension = [];
                $n1 = 0;
                foreach ($map['GroupDimension'] as $item1) {
                    $model->groupDimension[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
