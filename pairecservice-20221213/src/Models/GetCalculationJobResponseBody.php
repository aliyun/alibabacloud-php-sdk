<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class GetCalculationJobResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $ABMetricId;

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
     * @example 7D59453C-48AA-5FC5-8848-2D373BD1A17F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ABMetricId'   => 'ABMetricId',
        'ABMetricName' => 'ABMetricName',
        'bizDate'      => 'BizDate',
        'config'       => 'Config',
        'gmtRanTime'   => 'GmtRanTime',
        'jobMessage'   => 'JobMessage',
        'jobSource'    => 'JobSource',
        'requestId'    => 'RequestId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ABMetricId) {
            $res['ABMetricId'] = $this->ABMetricId;
        }
        if (null !== $this->ABMetricName) {
            $res['ABMetricName'] = $this->ABMetricName;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCalculationJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ABMetricId'])) {
            $model->ABMetricId = $map['ABMetricId'];
        }
        if (isset($map['ABMetricName'])) {
            $model->ABMetricName = $map['ABMetricName'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
