<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest\param\dbItemList;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @var string
     */
    public $attachmentName;

    /**
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $fileEncoding;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $insertType;

    /**
     * @var bool
     */
    public $csvFirstRowIsColumnDef;

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
    public $rollbackSQL;

    /**
     * @var string
     */
    public $rollbackAttachmentName;

    /**
     * @var string
     */
    public $rollbackSqlType;
    protected $_name = [
        'classify'               => 'Classify',
        'attachmentName'         => 'AttachmentName',
        'dbItemList'             => 'DbItemList',
        'fileType'               => 'FileType',
        'fileEncoding'           => 'FileEncoding',
        'tableName'              => 'TableName',
        'insertType'             => 'InsertType',
        'csvFirstRowIsColumnDef' => 'CsvFirstRowIsColumnDef',
        'ignoreError'            => 'IgnoreError',
        'importMode'             => 'ImportMode',
        'rollbackSQL'            => 'RollbackSQL',
        'rollbackAttachmentName' => 'RollbackAttachmentName',
        'rollbackSqlType'        => 'RollbackSqlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }
        if (null !== $this->dbItemList) {
            $res['DbItemList'] = [];
            if (null !== $this->dbItemList && \is_array($this->dbItemList)) {
                $n = 0;
                foreach ($this->dbItemList as $item) {
                    $res['DbItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->fileEncoding) {
            $res['FileEncoding'] = $this->fileEncoding;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->insertType) {
            $res['InsertType'] = $this->insertType;
        }
        if (null !== $this->csvFirstRowIsColumnDef) {
            $res['CsvFirstRowIsColumnDef'] = $this->csvFirstRowIsColumnDef;
        }
        if (null !== $this->ignoreError) {
            $res['IgnoreError'] = $this->ignoreError;
        }
        if (null !== $this->importMode) {
            $res['ImportMode'] = $this->importMode;
        }
        if (null !== $this->rollbackSQL) {
            $res['RollbackSQL'] = $this->rollbackSQL;
        }
        if (null !== $this->rollbackAttachmentName) {
            $res['RollbackAttachmentName'] = $this->rollbackAttachmentName;
        }
        if (null !== $this->rollbackSqlType) {
            $res['RollbackSqlType'] = $this->rollbackSqlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }
        if (isset($map['DbItemList'])) {
            if (!empty($map['DbItemList'])) {
                $model->dbItemList = [];
                $n                 = 0;
                foreach ($map['DbItemList'] as $item) {
                    $model->dbItemList[$n++] = null !== $item ? dbItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['FileEncoding'])) {
            $model->fileEncoding = $map['FileEncoding'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['InsertType'])) {
            $model->insertType = $map['InsertType'];
        }
        if (isset($map['CsvFirstRowIsColumnDef'])) {
            $model->csvFirstRowIsColumnDef = $map['CsvFirstRowIsColumnDef'];
        }
        if (isset($map['IgnoreError'])) {
            $model->ignoreError = $map['IgnoreError'];
        }
        if (isset($map['ImportMode'])) {
            $model->importMode = $map['ImportMode'];
        }
        if (isset($map['RollbackSQL'])) {
            $model->rollbackSQL = $map['RollbackSQL'];
        }
        if (isset($map['RollbackAttachmentName'])) {
            $model->rollbackAttachmentName = $map['RollbackAttachmentName'];
        }
        if (isset($map['RollbackSqlType'])) {
            $model->rollbackSqlType = $map['RollbackSqlType'];
        }

        return $model;
    }
}
