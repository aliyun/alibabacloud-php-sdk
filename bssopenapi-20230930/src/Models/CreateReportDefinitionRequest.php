<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateReportDefinitionRequest extends Model
{
    /**
     * @example 2025-05
     *
     * @var string
     */
    public $beginBillingCycle;

    /**
     * @example project
     *
     * @var string
     */
    public $mcProject;

    /**
     * @example table
     *
     * @var string
     */
    public $mcTableName;

    /**
     * @example 2684201000001
     *
     * @var string
     */
    public $nbid;

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
    public $reportSourceType;

    /**
     * @description This parameter is required.
     *
     * @example BillingItemDetailForBillingPeriod
     *
     * @var string
     */
    public $reportType;
    protected $_name = [
        'beginBillingCycle' => 'BeginBillingCycle',
        'mcProject' => 'McProject',
        'mcTableName' => 'McTableName',
        'nbid' => 'Nbid',
        'ossBucketName' => 'OssBucketName',
        'ossBucketOwnerAccountId' => 'OssBucketOwnerAccountId',
        'ossBucketPath' => 'OssBucketPath',
        'reportSourceType' => 'ReportSourceType',
        'reportType' => 'ReportType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginBillingCycle) {
            $res['BeginBillingCycle'] = $this->beginBillingCycle;
        }
        if (null !== $this->mcProject) {
            $res['McProject'] = $this->mcProject;
        }
        if (null !== $this->mcTableName) {
            $res['McTableName'] = $this->mcTableName;
        }
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
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
        if (null !== $this->reportSourceType) {
            $res['ReportSourceType'] = $this->reportSourceType;
        }
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReportDefinitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginBillingCycle'])) {
            $model->beginBillingCycle = $map['BeginBillingCycle'];
        }
        if (isset($map['McProject'])) {
            $model->mcProject = $map['McProject'];
        }
        if (isset($map['McTableName'])) {
            $model->mcTableName = $map['McTableName'];
        }
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
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
        if (isset($map['ReportSourceType'])) {
            $model->reportSourceType = $map['ReportSourceType'];
        }
        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        return $model;
    }
}
