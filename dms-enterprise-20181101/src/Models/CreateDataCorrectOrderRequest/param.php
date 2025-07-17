<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderRequest\param\dbItemList;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @description The key of the attachment that contains the SQL statements used to change data. You can call the [GetUserUploadFileJob](https://help.aliyun.com/document_detail/206069.html) operation to obtain the attachment key from the value of AttachmentKey.
     *
     * >  This parameter is required if you set **SqlType** to **ATTACHMENT**.
     *
     * @example test.sql
     *
     * @var string
     */
    public $attachmentName;

    /**
     * @description The reason for the data change.
     *
     * @example test
     *
     * @var string
     */
    public $classify;

    /**
     * @description The databases whose data you want to change.
     *
     * This parameter is required.
     *
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @description The estimated number of data rows that may be affected by the data change.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $estimateAffectRows;

    /**
     * @description The mode in which the data change ticket is executed after the ticket is approved. Valid values:
     *
     *   **COMMITOR**: The ticket is executed by the user who submits the ticket.
     *   **AUTO**: The ticket is automatically executed after the ticket is approved.
     *   **LAST_AUDITOR**: The ticket is executed by the last approver of the ticket.
     *
     * @example COMMITOR
     *
     * @var string
     */
    public $execMode;

    /**
     * @description The SQL statements for data change.
     *
     * >
     *
     *   This parameter is required if you set **SqlType** to **TEXT**.
     *
     *   The size of the SQL statement cannot exceed 15 MB.
     *
     * @example update base_user set id = 1 where id  = 1;
     *
     * @var string
     */
    public $execSQL;

    /**
     * @description The key of the attachment that contains the SQL statements used to roll back the data change. You can call the [GetUserUploadFileJob](https://help.aliyun.com/document_detail/206069.html) operation to obtain the attachment key from the value of AttachmentKey.
     *
     * >  This parameter is required if you set **RollbackSqlType** to **ATTACHMENT**.
     *
     * @example test_rollback.sql
     *
     * @var string
     */
    public $rollbackAttachmentName;

    /**
     * @description The SQL statements for rolling back the data change.
     *
     * >  This parameter is required if you set **RollbackSqlType** to **TEXT**.
     *
     * @example update base_user set id = 1 where id  = 1;
     *
     * @var string
     */
    public $rollbackSQL;

    /**
     * @description The format of the SQL statements used to roll back the data change. Valid values:
     *
     *   **TEXT**
     *   **ATTACHMENT**
     *
     * @example TEXT
     *
     * @var string
     */
    public $rollbackSqlType;

    /**
     * @description The format of the SQL statements used to change data. Valid values:
     *
     *   **TEXT**
     *   **ATTACHMENT**
     *
     * This parameter is required.
     *
     * @example TEXT
     *
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'attachmentName' => 'AttachmentName',
        'classify' => 'Classify',
        'dbItemList' => 'DbItemList',
        'estimateAffectRows' => 'EstimateAffectRows',
        'execMode' => 'ExecMode',
        'execSQL' => 'ExecSQL',
        'rollbackAttachmentName' => 'RollbackAttachmentName',
        'rollbackSQL' => 'RollbackSQL',
        'rollbackSqlType' => 'RollbackSqlType',
        'sqlType' => 'SqlType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
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
        if (null !== $this->estimateAffectRows) {
            $res['EstimateAffectRows'] = $this->estimateAffectRows;
        }
        if (null !== $this->execMode) {
            $res['ExecMode'] = $this->execMode;
        }
        if (null !== $this->execSQL) {
            $res['ExecSQL'] = $this->execSQL;
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
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
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
        if (isset($map['DbItemList'])) {
            if (!empty($map['DbItemList'])) {
                $model->dbItemList = [];
                $n = 0;
                foreach ($map['DbItemList'] as $item) {
                    $model->dbItemList[$n++] = null !== $item ? dbItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EstimateAffectRows'])) {
            $model->estimateAffectRows = $map['EstimateAffectRows'];
        }
        if (isset($map['ExecMode'])) {
            $model->execMode = $map['ExecMode'];
        }
        if (isset($map['ExecSQL'])) {
            $model->execSQL = $map['ExecSQL'];
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
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        return $model;
    }
}
