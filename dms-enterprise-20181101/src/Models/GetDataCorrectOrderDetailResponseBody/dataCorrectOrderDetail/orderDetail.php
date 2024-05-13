<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail;

use AlibabaCloud\Tea\Model;

class orderDetail extends Model
{
    /**
     * @description The number of affected rows that is obtained by the precheck.
     *
     * @example 100
     *
     * @var int
     */
    public $actualAffectRows;

    /**
     * @description The name of the attachment that contains the SQL statements used to change data.
     *
     * @example xxx
     *
     * @var string
     */
    public $attachmentName;

    /**
     * @description The category of the reason for the data change.
     *
     * @example test
     *
     * @var string
     */
    public $classify;

    /**
     * @description The estimated number of affected rows.
     *
     * @example 100
     *
     * @var int
     */
    public $estimateAffectRows;

    /**
     * @description The executed SQL statements.
     *
     * @example update t1 set name = \\"xxx\\" where id <= 100
     *
     * @var string
     */
    public $exeSQL;

    /**
     * @description Indicates whether the precheck result is ignored. Valid values:
     *
     * - **true**: The precheck result is ignored.
     * - **false**: The precheck result is not ignored.
     * @example false
     *
     * @var bool
     */
    public $ignoreAffectRows;

    /**
     * @description The reason why the precheck result is ignored.
     *
     * @example test
     *
     * @var string
     */
    public $ignoreAffectRowsReason;

    /**
     * @description The name of the attachment that contains the SQL statements used to roll back the data change.
     *
     * @example test
     *
     * @var string
     */
    public $rbAttachmentName;

    /**
     * @description The SQL statements used to roll back the data change.
     *
     * @example empty
     *
     * @var string
     */
    public $rbSQL;

    /**
     * @description The format of the SQL statements used to roll back the data change. Valid values:
     *
     * - **TEXT**: text
     * - **ATTACHMENT**: attachment
     * @example text
     *
     * @var string
     */
    public $rbSQLType;

    /**
     * @description The format of the SQL statements used to change data. Valid values:
     *
     * - **TEXT**: text
     * - **ATTACHMENT**: attachment
     * @example text
     *
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'actualAffectRows'       => 'ActualAffectRows',
        'attachmentName'         => 'AttachmentName',
        'classify'               => 'Classify',
        'estimateAffectRows'     => 'EstimateAffectRows',
        'exeSQL'                 => 'ExeSQL',
        'ignoreAffectRows'       => 'IgnoreAffectRows',
        'ignoreAffectRowsReason' => 'IgnoreAffectRowsReason',
        'rbAttachmentName'       => 'RbAttachmentName',
        'rbSQL'                  => 'RbSQL',
        'rbSQLType'              => 'RbSQLType',
        'sqlType'                => 'SqlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualAffectRows) {
            $res['ActualAffectRows'] = $this->actualAffectRows;
        }
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->estimateAffectRows) {
            $res['EstimateAffectRows'] = $this->estimateAffectRows;
        }
        if (null !== $this->exeSQL) {
            $res['ExeSQL'] = $this->exeSQL;
        }
        if (null !== $this->ignoreAffectRows) {
            $res['IgnoreAffectRows'] = $this->ignoreAffectRows;
        }
        if (null !== $this->ignoreAffectRowsReason) {
            $res['IgnoreAffectRowsReason'] = $this->ignoreAffectRowsReason;
        }
        if (null !== $this->rbAttachmentName) {
            $res['RbAttachmentName'] = $this->rbAttachmentName;
        }
        if (null !== $this->rbSQL) {
            $res['RbSQL'] = $this->rbSQL;
        }
        if (null !== $this->rbSQLType) {
            $res['RbSQLType'] = $this->rbSQLType;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualAffectRows'])) {
            $model->actualAffectRows = $map['ActualAffectRows'];
        }
        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['EstimateAffectRows'])) {
            $model->estimateAffectRows = $map['EstimateAffectRows'];
        }
        if (isset($map['ExeSQL'])) {
            $model->exeSQL = $map['ExeSQL'];
        }
        if (isset($map['IgnoreAffectRows'])) {
            $model->ignoreAffectRows = $map['IgnoreAffectRows'];
        }
        if (isset($map['IgnoreAffectRowsReason'])) {
            $model->ignoreAffectRowsReason = $map['IgnoreAffectRowsReason'];
        }
        if (isset($map['RbAttachmentName'])) {
            $model->rbAttachmentName = $map['RbAttachmentName'];
        }
        if (isset($map['RbSQL'])) {
            $model->rbSQL = $map['RbSQL'];
        }
        if (isset($map['RbSQLType'])) {
            $model->rbSQLType = $map['RbSQLType'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        return $model;
    }
}
