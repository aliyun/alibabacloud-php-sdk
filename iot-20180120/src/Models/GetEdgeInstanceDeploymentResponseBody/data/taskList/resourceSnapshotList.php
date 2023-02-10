<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentResponseBody\data\taskList;

use AlibabaCloud\Tea\Model;

class resourceSnapshotList extends Model
{
    /**
     * @example 2019-06-26 18:12:34
     *
     * @var string
     */
    public $gmtCompleted;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCompletedTimestamp;

    /**
     * @example 2019-06-26 18:12:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @example 2019-06-26 18:12:34
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @example [{\"resourceId\":\"device_config\",\"code\":\"0\",\"stage\":0,\"level\":\"INFO\",\"message\":\"init success\",\"resourceType\":\"DEVICE_CONFIG\",\"timestamp\":1561543949858},{\"resourceId\":\"device_config\",\"code\":\"0\",\"stage\":8,\"level\":\"INFO\",\"message\":\"assembly success\",\"resourceType\":\"DEVICE_CONFIG\",\"timestamp\":1561543951419},{\"resourceId\":\"device_config\",\"code\":\"0\",\"stage\":16,\"level\":\"INFO\",\"message\":\"package success\",\"resourceType\":\"DEVICE_CONFIG\",\"timestamp\":1561543952591},{\"resourceId\":\"device_config\",\"code\":\"0\",\"stage\":32,\"level\":\"INFO\",\"message\":\"download success\",\"resourceType\":\"DEVICE_CONFIG\",\"timestamp\":1561543954149}]
     *
     * @var string
     */
    public $log;

    /**
     * @example 0
     *
     * @var int
     */
    public $operateType;

    /**
     * @example device_config
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example device_config
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example device_config
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example ab576e84a43043d7840cbcebf4a5****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @example 32
     *
     * @var int
     */
    public $stage;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'gmtCompleted'          => 'GmtCompleted',
        'gmtCompletedTimestamp' => 'GmtCompletedTimestamp',
        'gmtCreate'             => 'GmtCreate',
        'gmtCreateTimestamp'    => 'GmtCreateTimestamp',
        'gmtModified'           => 'GmtModified',
        'gmtModifiedTimestamp'  => 'GmtModifiedTimestamp',
        'log'                   => 'Log',
        'operateType'           => 'OperateType',
        'resourceId'            => 'ResourceId',
        'resourceName'          => 'ResourceName',
        'resourceType'          => 'ResourceType',
        'snapshotId'            => 'SnapshotId',
        'stage'                 => 'Stage',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCompleted) {
            $res['GmtCompleted'] = $this->gmtCompleted;
        }
        if (null !== $this->gmtCompletedTimestamp) {
            $res['GmtCompletedTimestamp'] = $this->gmtCompletedTimestamp;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceSnapshotList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCompleted'])) {
            $model->gmtCompleted = $map['GmtCompleted'];
        }
        if (isset($map['GmtCompletedTimestamp'])) {
            $model->gmtCompletedTimestamp = $map['GmtCompletedTimestamp'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
