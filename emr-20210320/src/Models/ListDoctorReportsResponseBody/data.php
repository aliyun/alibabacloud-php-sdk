<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorReportsResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorReportsResponseBody\data\summaryReport;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example null
     *
     * @var string[]
     */
    public $componentTypes;

    /**
     * @example 2023-06-29
     *
     * @var string
     */
    public $dateTime;

    /**
     * @var summaryReport
     */
    public $summaryReport;
    protected $_name = [
        'componentTypes' => 'ComponentTypes',
        'dateTime'       => 'DateTime',
        'summaryReport'  => 'SummaryReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentTypes) {
            $res['ComponentTypes'] = $this->componentTypes;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }
        if (null !== $this->summaryReport) {
            $res['SummaryReport'] = null !== $this->summaryReport ? $this->summaryReport->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentTypes'])) {
            if (!empty($map['ComponentTypes'])) {
                $model->componentTypes = $map['ComponentTypes'];
            }
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }
        if (isset($map['SummaryReport'])) {
            $model->summaryReport = summaryReport::fromMap($map['SummaryReport']);
        }

        return $model;
    }
}
