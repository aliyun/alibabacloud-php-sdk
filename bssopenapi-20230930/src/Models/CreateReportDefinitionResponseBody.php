<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateReportDefinitionResponseBody extends Model
{
    /**
     * @example 2025-05
     *
     * @var string
     */
    public $beginBillingCycle;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @example sh-bill
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @example 1234567812345678
     *
     * @var int
     */
    public $ossBucketOwnerAccountId;

    /**
     * @example bill/
     *
     * @var string
     */
    public $ossBucketPath;

    /**
     * @example OSS
     *
     * @var string
     */
    public $reportSourceName;

    /**
     * @example OSS
     *
     * @var string
     */
    public $reportSourceType;

    /**
     * @example 123123
     *
     * @var int
     */
    public $reportTaskId;

    /**
     * @example BillingItemDetailForBillingPeriod
     *
     * @var string
     */
    public $reportType;

    /**
     * @example 340CAB45-0637-5875-9BE4-EFD5750F6BA5
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2025-05-21 10:36:31
     *
     * @var string
     */
    public $subscribeCreateTime;
    protected $_name = [
        'beginBillingCycle' => 'BeginBillingCycle',
        'metadata' => 'Metadata',
        'ossBucketName' => 'OssBucketName',
        'ossBucketOwnerAccountId' => 'OssBucketOwnerAccountId',
        'ossBucketPath' => 'OssBucketPath',
        'reportSourceName' => 'ReportSourceName',
        'reportSourceType' => 'ReportSourceType',
        'reportTaskId' => 'ReportTaskId',
        'reportType' => 'ReportType',
        'requestId' => 'RequestId',
        'subscribeCreateTime' => 'SubscribeCreateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginBillingCycle) {
            $res['BeginBillingCycle'] = $this->beginBillingCycle;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscribeCreateTime) {
            $res['SubscribeCreateTime'] = $this->subscribeCreateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReportDefinitionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginBillingCycle'])) {
            $model->beginBillingCycle = $map['BeginBillingCycle'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubscribeCreateTime'])) {
            $model->subscribeCreateTime = $map['SubscribeCreateTime'];
        }

        return $model;
    }
}
