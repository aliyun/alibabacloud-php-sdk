<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderRequest\param\dbItemList;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @description The key of the attachment that contains the SQL statements used to change data. You can call the [GetUserUploadFileJob](~~206069~~) operation to obtain the attachment key from the value of the AttachmentKey parameter.
     *
     * >  This parameter is required if you set the **SqlType** parameter to **ATTACHMENT**.
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
     * @description The databases in which you want to change data.
     *
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @description The estimated number of data rows to be affected by the data change.
     *
     * @example 1
     *
     * @var int
     */
    public $estimateAffectRows;

    /**
     * @description The execution mode of the ticket after the ticket is approved. Valid values:
     *
     *   **COMMITOR**: The data change is performed by the user who submits the ticket.
     *   **AUTO**: The data change is automatically performed after the ticket is approved.
     *   **LAST_AUDITOR**: The data change is performed by the last approver of the ticket.
     *
     * @example COMMITOR
     *
     * @var string
     */
    public $execMode;

    /**
     * @description The SQL statements that you want to execute to change data.
     *
     * >  This parameter is required if you set the **SqlType** parameter to **TEXT**.
     * @example update base_user set id = 1 where id  = 1;
     *
     * @var string
     */
    public $execSQL;

    /**
     * @description The key of the attachment that contains the SQL statements used to roll back the data change. You can call the [GetUserUploadFileJob](~~206069~~) operation to the attachment key from the value of the AttachmentKey parameter.
     *
     * >  This parameter is required if you set the **RollbackSqlType** parameter to **ATTACHMENT**.
     * @example test_rollback.sql
     *
     * @var string
     */
    public $rollbackAttachmentName;

    /**
     * @description The SQL statements used to roll back the data change.
     *
     * >
     *   This parameter is required if you set the **RollbackSqlType** parameter to **TEXT**.
     *
     * @example update base_user set id = 1 where id  = 1;
     *
     * @var string
     */
    public $rollbackSQL;

    /**
     * @description The format of the SQL statements used to roll back the data change. Valid values:
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
     * @description The format of the SQL statements used to change data. Valid values:
     *
     *   **TEXT**: text
     *   **ATTACHMENT**: attachment
     *
     * @example TEXT
     *
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'attachmentName'         => 'AttachmentName',
        'classify'               => 'Classify',
        'dbItemList'             => 'DbItemList',
        'estimateAffectRows'     => 'EstimateAffectRows',
        'execMode'               => 'ExecMode',
        'execSQL'                => 'ExecSQL',
        'rollbackAttachmentName' => 'RollbackAttachmentName',
        'rollbackSQL'            => 'RollbackSQL',
        'rollbackSqlType'        => 'RollbackSqlType',
        'sqlType'                => 'SqlType',
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
                $n                 = 0;
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
