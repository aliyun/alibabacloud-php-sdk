<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateReportDefinitionRequest extends Model
{
    /**
     * @var string
     */
    public $beginBillingCycle;

    /**
     * @var string
     */
    public $includeMembers;

    /**
     * @var string
     */
    public $mcProject;

    /**
     * @var string
     */
    public $mcTableName;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var string
     */
    public $notSendOnNoData;

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
    public $reportSourceType;

    /**
     * @var string
     */
    public $reportType;

    /**
     * @var string
     */
    public $sendWithAttach;

    /**
     * @var string
     */
    public $splitFileOnUserId;
    protected $_name = [
        'beginBillingCycle' => 'BeginBillingCycle',
        'includeMembers' => 'IncludeMembers',
        'mcProject' => 'McProject',
        'mcTableName' => 'McTableName',
        'nbid' => 'Nbid',
        'notSendOnNoData' => 'NotSendOnNoData',
        'ossBucketName' => 'OssBucketName',
        'ossBucketOwnerAccountId' => 'OssBucketOwnerAccountId',
        'ossBucketPath' => 'OssBucketPath',
        'reportSourceType' => 'ReportSourceType',
        'reportType' => 'ReportType',
        'sendWithAttach' => 'SendWithAttach',
        'splitFileOnUserId' => 'SplitFileOnUserId',
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

        if (null !== $this->includeMembers) {
            $res['IncludeMembers'] = $this->includeMembers;
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

        if (null !== $this->notSendOnNoData) {
            $res['NotSendOnNoData'] = $this->notSendOnNoData;
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

        if (null !== $this->sendWithAttach) {
            $res['SendWithAttach'] = $this->sendWithAttach;
        }

        if (null !== $this->splitFileOnUserId) {
            $res['SplitFileOnUserId'] = $this->splitFileOnUserId;
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

        if (isset($map['IncludeMembers'])) {
            $model->includeMembers = $map['IncludeMembers'];
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

        if (isset($map['NotSendOnNoData'])) {
            $model->notSendOnNoData = $map['NotSendOnNoData'];
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

        if (isset($map['SendWithAttach'])) {
            $model->sendWithAttach = $map['SendWithAttach'];
        }

        if (isset($map['SplitFileOnUserId'])) {
            $model->splitFileOnUserId = $map['SplitFileOnUserId'];
        }

        return $model;
    }
}
