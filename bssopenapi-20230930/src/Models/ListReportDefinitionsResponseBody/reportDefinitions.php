<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListReportDefinitionsResponseBody;

use AlibabaCloud\Dara\Model;

class reportDefinitions extends Model
{
    /**
     * @var string
     */
    public $beginBillingCycle;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var int
     */
    public $ossBucketOwnerAccountId;

    /**
     * @var string
     */
    public $ossBucketPath;

    /**
     * @var string
     */
    public $reportSourceName;

    /**
     * @var string
     */
    public $reportSourceType;

    /**
     * @var int
     */
    public $reportTaskId;

    /**
     * @var string
     */
    public $reportType;

    /**
     * @var string
     */
    public $subscribeCreateTime;
    protected $_name = [
        'beginBillingCycle' => 'BeginBillingCycle',
        'ossBucketName' => 'OssBucketName',
        'ossBucketOwnerAccountId' => 'OssBucketOwnerAccountId',
        'ossBucketPath' => 'OssBucketPath',
        'reportSourceName' => 'ReportSourceName',
        'reportSourceType' => 'ReportSourceType',
        'reportTaskId' => 'ReportTaskId',
        'reportType' => 'ReportType',
        'subscribeCreateTime' => 'SubscribeCreateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginBillingCycle) {
            $res['BeginBillingCycle'] = $this->beginBillingCycle;
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossBucketOwnerAccountId) {
            $res['OssBucketOwnerAccountId'] = $this->ossBucketOwnerAccountId;
        }

        if (null !== $this->ossBucketPath) {
            $res['OssBucketPath'] = $this->ossBucketPath;
        }

        if (null !== $this->reportSourceName) {
            $res['ReportSourceName'] = $this->reportSourceName;
        }

        if (null !== $this->reportSourceType) {
            $res['ReportSourceType'] = $this->reportSourceType;
        }

        if (null !== $this->reportTaskId) {
            $res['ReportTaskId'] = $this->reportTaskId;
        }

        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        if (null !== $this->subscribeCreateTime) {
            $res['SubscribeCreateTime'] = $this->subscribeCreateTime;
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
        if (isset($map['BeginBillingCycle'])) {
            $model->beginBillingCycle = $map['BeginBillingCycle'];
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['OssBucketOwnerAccountId'])) {
            $model->ossBucketOwnerAccountId = $map['OssBucketOwnerAccountId'];
        }

        if (isset($map['OssBucketPath'])) {
            $model->ossBucketPath = $map['OssBucketPath'];
        }

        if (isset($map['ReportSourceName'])) {
            $model->reportSourceName = $map['ReportSourceName'];
        }

        if (isset($map['ReportSourceType'])) {
            $model->reportSourceType = $map['ReportSourceType'];
        }

        if (isset($map['ReportTaskId'])) {
            $model->reportTaskId = $map['ReportTaskId'];
        }

        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        if (isset($map['SubscribeCreateTime'])) {
            $model->subscribeCreateTime = $map['SubscribeCreateTime'];
        }

        return $model;
    }
}
