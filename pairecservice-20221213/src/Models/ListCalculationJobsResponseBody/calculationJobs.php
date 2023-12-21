<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCalculationJobsResponseBody;

use AlibabaCloud\Tea\Model;

class calculationJobs extends Model
{
    /**
     * @example pv
     *
     * @var string
     */
    public $ABMetricName;

    /**
     * @example 2021-12-15
     *
     * @var string
     */
    public $bizDate;

    /**
     * @example 2
     *
     * @var string
     */
    public $calculationJobId;

    /**
     * @example {}
     *
     * @var string
     */
    public $config;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtRanTime;

    /**
     * @var string[]
     */
    public $jobMessage;

    /**
     * @example CronOffline
     *
     * @var string
     */
    public $jobSource;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ABMetricName'     => 'ABMetricName',
        'bizDate'          => 'BizDate',
        'calculationJobId' => 'CalculationJobId',
        'config'           => 'Config',
        'gmtRanTime'       => 'GmtRanTime',
        'jobMessage'       => 'JobMessage',
        'jobSource'        => 'JobSource',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ABMetricName) {
            $res['ABMetricName'] = $this->ABMetricName;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->calculationJobId) {
            $res['CalculationJobId'] = $this->calculationJobId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->gmtRanTime) {
            $res['GmtRanTime'] = $this->gmtRanTime;
        }
        if (null !== $this->jobMessage) {
            $res['JobMessage'] = $this->jobMessage;
        }
        if (null !== $this->jobSource) {
            $res['JobSource'] = $this->jobSource;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return calculationJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ABMetricName'])) {
            $model->ABMetricName = $map['ABMetricName'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['CalculationJobId'])) {
            $model->calculationJobId = $map['CalculationJobId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['GmtRanTime'])) {
            $model->gmtRanTime = $map['GmtRanTime'];
        }
        if (isset($map['JobMessage'])) {
            if (!empty($map['JobMessage'])) {
                $model->jobMessage = $map['JobMessage'];
            }
        }
        if (isset($map['JobSource'])) {
            $model->jobSource = $map['JobSource'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
