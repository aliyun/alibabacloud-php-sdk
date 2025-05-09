<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest\param\dbItemList;

class param extends Model
{
    /**
     * @var string
     */
    public $attachmentName;

    /**
     * @var string
     */
    public $classify;

    /**
     * @var bool
     */
    public $csvFirstRowIsColumnDef;

    /**
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @var string
     */
    public $execMode;

    /**
     * @var string
     */
    public $fileEncoding;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var bool
     */
    public $ignoreError;

    /**
     * @var string
     */
    public $importMode;

    /**
     * @var string
     */
    public $insertType;

    /**
     * @var string
     */
    public $rollbackAttachmentName;

    /**
     * @var string
     */
    public $rollbackSQL;

    /**
     * @var string
     */
    public $rollbackSqlType;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'attachmentName' => 'AttachmentName',
        'classify' => 'Classify',
        'csvFirstRowIsColumnDef' => 'CsvFirstRowIsColumnDef',
        'dbItemList' => 'DbItemList',
        'execMode' => 'ExecMode',
        'fileEncoding' => 'FileEncoding',
        'fileType' => 'FileType',
        'ignoreError' => 'IgnoreError',
        'importMode' => 'ImportMode',
        'insertType' => 'InsertType',
        'rollbackAttachmentName' => 'RollbackAttachmentName',
        'rollbackSQL' => 'RollbackSQL',
        'rollbackSqlType' => 'RollbackSqlType',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->dbItemList)) {
            Model::validateArray($this->dbItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }

        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->csvFirstRowIsColumnDef) {
            $res['CsvFirstRowIsColumnDef'] = $this->csvFirstRowIsColumnDef;
        }

        if (null !== $this->dbItemList) {
            if (\is_array($this->dbItemList)) {
                $res['DbItemList'] = [];
                $n1 = 0;
                foreach ($this->dbItemList as $item1) {
                    $res['DbItemList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->execMode) {
            $res['ExecMode'] = $this->execMode;
        }

        if (null !== $this->fileEncoding) {
            $res['FileEncoding'] = $this->fileEncoding;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->ignoreError) {
            $res['IgnoreError'] = $this->ignoreError;
        }

        if (null !== $this->importMode) {
            $res['ImportMode'] = $this->importMode;
        }

        if (null !== $this->insertType) {
            $res['InsertType'] = $this->insertType;
        }

        if (null !== $this->rollbackAttachmentName) {
            $res['RollbackAttachmentName'] = $this->rollbackAttachmentName;
        }

        if (null !== $this->rollbackSQL) {
            $res['RollbackSQL'] = $this->rollbackSQL;
        }

        if (null !== $this->rollbackSqlType) {
            $res['RollbackSqlType'] = $this->rollbackSqlType;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }

        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }

        if (isset($map['CsvFirstRowIsColumnDef'])) {
            $model->csvFirstRowIsColumnDef = $map['CsvFirstRowIsColumnDef'];
        }

        if (isset($map['DbItemList'])) {
            if (!empty($map['DbItemList'])) {
                $model->dbItemList = [];
                $n1 = 0;
                foreach ($map['DbItemList'] as $item1) {
                    $model->dbItemList[$n1++] = dbItemList::fromMap($item1);
                }
            }
        }

        if (isset($map['ExecMode'])) {
            $model->execMode = $map['ExecMode'];
        }

        if (isset($map['FileEncoding'])) {
            $model->fileEncoding = $map['FileEncoding'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['IgnoreError'])) {
            $model->ignoreError = $map['IgnoreError'];
        }

        if (isset($map['ImportMode'])) {
            $model->importMode = $map['ImportMode'];
        }

        if (isset($map['InsertType'])) {
            $model->insertType = $map['InsertType'];
        }

        if (isset($map['RollbackAttachmentName'])) {
            $model->rollbackAttachmentName = $map['RollbackAttachmentName'];
        }

        if (isset($map['RollbackSQL'])) {
            $model->rollbackSQL = $map['RollbackSQL'];
        }

        if (isset($map['RollbackSqlType'])) {
            $model->rollbackSqlType = $map['RollbackSqlType'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
