<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\GenerateReportRequest\reportConfigs;

class GenerateReportRequest extends Model
{
    /**
     * @var reportConfigs[]
     */
    public $reportConfigs;
    protected $_name = [
        'reportConfigs' => 'ReportConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->reportConfigs)) {
            Model::validateArray($this->reportConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportConfigs) {
            if (\is_array($this->reportConfigs)) {
                $res['ReportConfigs'] = [];
                $n1 = 0;
                foreach ($this->reportConfigs as $item1) {
                    $res['ReportConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReportConfigs'])) {
            if (!empty($map['ReportConfigs'])) {
                $model->reportConfigs = [];
                $n1 = 0;
                foreach ($map['ReportConfigs'] as $item1) {
                    $model->reportConfigs[$n1++] = reportConfigs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
