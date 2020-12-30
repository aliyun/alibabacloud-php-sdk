<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail;

use AlibabaCloud\Tea\Model;

class orderDetail extends Model
{
    /**
     * @var string
     */
    public $rbSQL;

    /**
     * @var string
     */
    public $rbAttachmentName;

    /**
     * @var string
     */
    public $classify;

    /**
     * @var string
     */
    public $exeSQL;

    /**
     * @var int
     */
    public $estimateAffectRows;

    /**
     * @var string
     */
    public $rbSQLType;

    /**
     * @var int
     */
    public $actualAffectRows;

    /**
     * @var bool
     */
    public $ignoreAffectRows;

    /**
     * @var string
     */
    public $attachmentName;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $ignoreAffectRowsReason;
    protected $_name = [
        'rbSQL'                  => 'RbSQL',
        'rbAttachmentName'       => 'RbAttachmentName',
        'classify'               => 'Classify',
        'exeSQL'                 => 'ExeSQL',
        'estimateAffectRows'     => 'EstimateAffectRows',
        'rbSQLType'              => 'RbSQLType',
        'actualAffectRows'       => 'ActualAffectRows',
        'ignoreAffectRows'       => 'IgnoreAffectRows',
        'attachmentName'         => 'AttachmentName',
        'sqlType'                => 'SqlType',
        'ignoreAffectRowsReason' => 'IgnoreAffectRowsReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rbSQL) {
            $res['RbSQL'] = $this->rbSQL;
        }
        if (null !== $this->rbAttachmentName) {
            $res['RbAttachmentName'] = $this->rbAttachmentName;
        }
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->exeSQL) {
            $res['ExeSQL'] = $this->exeSQL;
        }
        if (null !== $this->estimateAffectRows) {
            $res['EstimateAffectRows'] = $this->estimateAffectRows;
        }
        if (null !== $this->rbSQLType) {
            $res['RbSQLType'] = $this->rbSQLType;
        }
        if (null !== $this->actualAffectRows) {
            $res['ActualAffectRows'] = $this->actualAffectRows;
        }
        if (null !== $this->ignoreAffectRows) {
            $res['IgnoreAffectRows'] = $this->ignoreAffectRows;
        }
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->ignoreAffectRowsReason) {
            $res['IgnoreAffectRowsReason'] = $this->ignoreAffectRowsReason;
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
        if (isset($map['RbSQL'])) {
            $model->rbSQL = $map['RbSQL'];
        }
        if (isset($map['RbAttachmentName'])) {
            $model->rbAttachmentName = $map['RbAttachmentName'];
        }
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['ExeSQL'])) {
            $model->exeSQL = $map['ExeSQL'];
        }
        if (isset($map['EstimateAffectRows'])) {
            $model->estimateAffectRows = $map['EstimateAffectRows'];
        }
        if (isset($map['RbSQLType'])) {
            $model->rbSQLType = $map['RbSQLType'];
        }
        if (isset($map['ActualAffectRows'])) {
            $model->actualAffectRows = $map['ActualAffectRows'];
        }
        if (isset($map['IgnoreAffectRows'])) {
            $model->ignoreAffectRows = $map['IgnoreAffectRows'];
        }
        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['IgnoreAffectRowsReason'])) {
            $model->ignoreAffectRowsReason = $map['IgnoreAffectRowsReason'];
        }

        return $model;
    }
}
