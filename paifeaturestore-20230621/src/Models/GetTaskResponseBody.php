<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class GetTaskResponseBody extends Model
{
    /**
     * @example {
     * }
     * @var string
     */
    public $config;

    /**
     * @example 2023-07-04T11:26:09.036+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2023-07-04T11:26:09.036+08:00
     *
     * @var string
     */
    public $gmtExecutedTime;

    /**
     * @example 2023-07-04T11:26:09.036+08:00
     *
     * @var string
     */
    public $gmtFinishedTime;

    /**
     * @example 2023-07-04T11:26:09.036+08:00
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 3
     *
     * @var string
     */
    public $objectId;

    /**
     * @example ModelFeature
     *
     * @var string
     */
    public $objectType;

    /**
     * @example 3
     *
     * @var string
     */
    public $projectId;

    /**
     * @example project_1
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 37D19490-AB69-567D-A852-407C94E510E9
     *
     * @var string
     */
    public $requestId;

    /**
     * @example DROP TABLE IF EXISTS public.fsxxx
     *
     * @var string
     */
    public $runningConfig;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example OfflineToOnline
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'          => 'Config',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtExecutedTime' => 'GmtExecutedTime',
        'gmtFinishedTime' => 'GmtFinishedTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'objectId'        => 'ObjectId',
        'objectType'      => 'ObjectType',
        'projectId'       => 'ProjectId',
        'projectName'     => 'ProjectName',
        'requestId'       => 'RequestId',
        'runningConfig'   => 'RunningConfig',
        'status'          => 'Status',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtExecutedTime) {
            $res['GmtExecutedTime'] = $this->gmtExecutedTime;
        }
        if (null !== $this->gmtFinishedTime) {
            $res['GmtFinishedTime'] = $this->gmtFinishedTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->runningConfig) {
            $res['RunningConfig'] = $this->runningConfig;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtExecutedTime'])) {
            $model->gmtExecutedTime = $map['GmtExecutedTime'];
        }
        if (isset($map['GmtFinishedTime'])) {
            $model->gmtFinishedTime = $map['GmtFinishedTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RunningConfig'])) {
            $model->runningConfig = $map['RunningConfig'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
