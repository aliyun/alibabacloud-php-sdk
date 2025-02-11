<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListResultExportJobHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $aliUid;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $databaseUser;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $exportJobId;
    /**
     * @var string
     */
    public $exportPath;
    /**
     * @var string
     */
    public $exportRows;
    /**
     * @var string
     */
    public $exportType;
    /**
     * @var bool
     */
    public $isExpired;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $processId;
    /**
     * @var string
     */
    public $progress;
    /**
     * @var string
     */
    public $resourceGroup;
    /**
     * @var string
     */
    public $schema;
    /**
     * @var string
     */
    public $sql;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $timeCost;
    protected $_name = [
        'aliUid'        => 'AliUid',
        'createTime'    => 'CreateTime',
        'DBClusterId'   => 'DBClusterId',
        'databaseUser'  => 'DatabaseUser',
        'endTime'       => 'EndTime',
        'engine'        => 'Engine',
        'exportJobId'   => 'ExportJobId',
        'exportPath'    => 'ExportPath',
        'exportRows'    => 'ExportRows',
        'exportType'    => 'ExportType',
        'isExpired'     => 'IsExpired',
        'message'       => 'Message',
        'processId'     => 'ProcessId',
        'progress'      => 'Progress',
        'resourceGroup' => 'ResourceGroup',
        'schema'        => 'Schema',
        'sql'           => 'Sql',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'timeCost'      => 'TimeCost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->databaseUser) {
            $res['DatabaseUser'] = $this->databaseUser;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->exportJobId) {
            $res['ExportJobId'] = $this->exportJobId;
        }

        if (null !== $this->exportPath) {
            $res['ExportPath'] = $this->exportPath;
        }

        if (null !== $this->exportRows) {
            $res['ExportRows'] = $this->exportRows;
        }

        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }

        if (null !== $this->isExpired) {
            $res['IsExpired'] = $this->isExpired;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->timeCost) {
            $res['TimeCost'] = $this->timeCost;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DatabaseUser'])) {
            $model->databaseUser = $map['DatabaseUser'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['ExportJobId'])) {
            $model->exportJobId = $map['ExportJobId'];
        }

        if (isset($map['ExportPath'])) {
            $model->exportPath = $map['ExportPath'];
        }

        if (isset($map['ExportRows'])) {
            $model->exportRows = $map['ExportRows'];
        }

        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }

        if (isset($map['IsExpired'])) {
            $model->isExpired = $map['IsExpired'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TimeCost'])) {
            $model->timeCost = $map['TimeCost'];
        }

        return $model;
    }
}
