<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest\param\dbItemList;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @description The key of the attachment that contains the SQL statements used to import data. You can call the [GetUserUploadFileJob](~~206069~~) operation to the attachment key from the value of the AttachmentKey parameter.
     *
     * @example order_text
     *
     * @var string
     */
    public $attachmentName;

    /**
     * @description The reason for the data import.
     *
     * @example test
     *
     * @var string
     */
    public $classify;

    /**
     * @description The type of the CSV file. Valid values:
     *
     *   **true**: The first row in the CSV file contains field names.
     *   **false**: The first row in the CSV file contains data.
     *
     * >  This parameter is required if you set the **FileType** parameter to **CSV**.
     * @example true
     *
     * @var bool
     */
    public $csvFirstRowIsColumnDef;

    /**
     * @description The database to which you want to import data. You can specify only one database.
     *
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @description The encoding algorithm to be used by the destination database. Valid values:
     *
     *   **AUTO**: automatic identification
     *   **UTF-8**: UTF-8 encoding
     *   **GBK**: GBK encoding
     *   **ISO-8859-1**: ISO-8859-1 encoding
     *
     * @example AUTO
     *
     * @var string
     */
    public $fileEncoding;

    /**
     * @description The format of the file for the data import. Valid values:
     *
     *   **SQL**: an SQL file
     *   **CSV**: a CSV file
     *
     * @example CSV
     *
     * @var string
     */
    public $fileType;

    /**
     * @description Specifies whether to skip an error that occurs. Valid values:
     *
     *   **true**: skips the error and continues to execute SQL statements.
     *   **false**: stops executing SQL statements.
     *
     * @example false
     *
     * @var bool
     */
    public $ignoreError;

    /**
     * @description The import mode. Valid values:
     *
     *   **FAST_MODE**: In the Execute step, the uploaded file is read and SQL statements are executed to import data to the specified destination database. Compared with the security mode, this mode can be used to import data in a less secure but more efficient manner.
     *   **SAFE_MODE**: In the Precheck step, the uploaded file is parsed, and SQL statements or CSV file data is cached. In the Execute step, the cached SQL statements are read and executed to import data, or the cached CSV file data is read and imported to the specified destination database. This mode can be used to import data in a more secure but less efficient manner.
     *
     * @example FAST_MODE
     *
     * @var string
     */
    public $importMode;

    /**
     * @description The mode in which the data in the CSV format is to be written to the destination table. Valid values:
     *
     *   **INSERT**: The database checks the primary key when data is written. If a duplicate primary key value exists, an error message is returned.
     *   **INSERT_IGNORE**: If the imported data contains data records that are the same as those in the destination table, the new data records are ignored.
     *   **REPLACE_INTO**: If the imported data contains a row that has the same value for the primary key or unique index as one row in the destination table, the database deletes the existing row and inserts the new row into the destination table.
     *
     * >  This parameter is required if you set the **FileType** parameter to **CSV**.
     * @example INSERT
     *
     * @var string
     */
    public $insertType;

    /**
     * @description The key of the attachment that contains the SQL statements used to roll back the data import. You can call the [GetUserUploadFileJob](~~206069~~) operation to obtain the attachment key from the value of the AttachmentKey parameter.
     *
     * >  This parameter is required if you set the **RollbackSqlType** parameter to **ATTACHMENT**.
     * @example rollback.sql
     *
     * @var string
     */
    public $rollbackAttachmentName;

    /**
     * @description The SQL statements used to roll back the data import.
     *
     * >  This parameter is required if you set the **RollbackSqlType** parameter to **TEXT**.
     * @example empty
     *
     * @var string
     */
    public $rollbackSQL;

    /**
     * @description The format of the SQL statements used to roll back the data import. Valid values:
     *
     *   **TEXT**: text
     *   **ATTACHMENT**: attachment
     *
     * @example TEXT
     *
     * @var string
     */
    public $rollbackSqlType;

    /**
     * @description The destination table to which you want to import the data in the CSV format.
     *
     * >  This parameter is required if you set the **FileType** parameter to **CSV**.
     * @example Table_text
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'attachmentName'         => 'AttachmentName',
        'classify'               => 'Classify',
        'csvFirstRowIsColumnDef' => 'CsvFirstRowIsColumnDef',
        'dbItemList'             => 'DbItemList',
        'fileEncoding'           => 'FileEncoding',
        'fileType'               => 'FileType',
        'ignoreError'            => 'IgnoreError',
        'importMode'             => 'ImportMode',
        'insertType'             => 'InsertType',
        'rollbackAttachmentName' => 'RollbackAttachmentName',
        'rollbackSQL'            => 'RollbackSQL',
        'rollbackSqlType'        => 'RollbackSqlType',
        'tableName'              => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['DbItemList'] = [];
            if (null !== $this->dbItemList && \is_array($this->dbItemList)) {
                $n = 0;
                foreach ($this->dbItemList as $item) {
                    $res['DbItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

    /**
     * @param array $map
     *
     * @return param
     */
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
                $n                 = 0;
                foreach ($map['DbItemList'] as $item) {
                    $model->dbItemList[$n++] = null !== $item ? dbItemList::fromMap($item) : $item;
                }
            }
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
