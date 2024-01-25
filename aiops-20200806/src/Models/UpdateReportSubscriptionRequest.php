<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateReportSubscriptionRequest extends Model
{
    /**
     * @var int
     */
    public $dayOfWeek;

    /**
     * @var int
     */
    public $hourOfDay;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $reportName;

    /**
     * @var int
     */
    public $subscribe;
    protected $_name = [
        'dayOfWeek'  => 'DayOfWeek',
        'hourOfDay'  => 'HourOfDay',
        'operaUid'   => 'OperaUid',
        'reportName' => 'ReportName',
        'subscribe'  => 'Subscribe',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayOfWeek) {
            $res['DayOfWeek'] = $this->dayOfWeek;
        }
        if (null !== $this->hourOfDay) {
            $res['HourOfDay'] = $this->hourOfDay;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->reportName) {
            $res['ReportName'] = $this->reportName;
        }
        if (null !== $this->subscribe) {
            $res['Subscribe'] = $this->subscribe;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateReportSubscriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DayOfWeek'])) {
            $model->dayOfWeek = $map['DayOfWeek'];
        }
        if (isset($map['HourOfDay'])) {
            $model->hourOfDay = $map['HourOfDay'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ReportName'])) {
            $model->reportName = $map['ReportName'];
        }
        if (isset($map['Subscribe'])) {
            $model->subscribe = $map['Subscribe'];
        }

        return $model;
    }
}
