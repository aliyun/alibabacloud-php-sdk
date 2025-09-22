<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class CreateDataFlowTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $conflictPolicy;

    /**
     * @var bool
     */
    public $createDirIfNotExist;

    /**
     * @var string
     */
    public $dataFlowId;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $dstDirectory;

    /**
     * @var string
     */
    public $entryList;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $includes;

    /**
     * @var string
     */
    public $srcTaskId;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var string
     */
    public $transferFileListPath;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'conflictPolicy' => 'ConflictPolicy',
        'createDirIfNotExist' => 'CreateDirIfNotExist',
        'dataFlowId' => 'DataFlowId',
        'dataType' => 'DataType',
        'directory' => 'Directory',
        'dryRun' => 'DryRun',
        'dstDirectory' => 'DstDirectory',
        'entryList' => 'EntryList',
        'fileSystemId' => 'FileSystemId',
        'includes' => 'Includes',
        'srcTaskId' => 'SrcTaskId',
        'taskAction' => 'TaskAction',
        'transferFileListPath' => 'TransferFileListPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->conflictPolicy) {
            $res['ConflictPolicy'] = $this->conflictPolicy;
        }

        if (null !== $this->createDirIfNotExist) {
            $res['CreateDirIfNotExist'] = $this->createDirIfNotExist;
        }

        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->dstDirectory) {
            $res['DstDirectory'] = $this->dstDirectory;
        }

        if (null !== $this->entryList) {
            $res['EntryList'] = $this->entryList;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->includes) {
            $res['Includes'] = $this->includes;
        }

        if (null !== $this->srcTaskId) {
            $res['SrcTaskId'] = $this->srcTaskId;
        }

        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }

        if (null !== $this->transferFileListPath) {
            $res['TransferFileListPath'] = $this->transferFileListPath;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConflictPolicy'])) {
            $model->conflictPolicy = $map['ConflictPolicy'];
        }

        if (isset($map['CreateDirIfNotExist'])) {
            $model->createDirIfNotExist = $map['CreateDirIfNotExist'];
        }

        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['DstDirectory'])) {
            $model->dstDirectory = $map['DstDirectory'];
        }

        if (isset($map['EntryList'])) {
            $model->entryList = $map['EntryList'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['Includes'])) {
            $model->includes = $map['Includes'];
        }

        if (isset($map['SrcTaskId'])) {
            $model->srcTaskId = $map['SrcTaskId'];
        }

        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        if (isset($map['TransferFileListPath'])) {
            $model->transferFileListPath = $map['TransferFileListPath'];
        }

        return $model;
    }
}
