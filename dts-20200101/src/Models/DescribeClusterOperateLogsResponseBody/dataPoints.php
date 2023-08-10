<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeClusterOperateLogsResponseBody;

use AlibabaCloud\Tea\Model;

class dataPoints extends Model
{
    /**
     * @description Other description of the operation.
     *
     * @example null
     *
     * @var string
     */
    public $content;

    /**
     * @description The primary key of the log table.
     *
     * @example 237827
     *
     * @var string
     */
    public $id;

    /**
     * @description The time when the operation is recorded. The value is in the UNIX timestamp format. Unit: milliseconds.
     *
     * @example 1642077211574
     *
     * @var int
     */
    public $logDatetime;

    /**
     * @description The value of the parameter after the operation if the operation is an UPDATE operation.
     *
     * @example 105
     *
     * @var string
     */
    public $newValue;

    /**
     * @description The value of the parameter before the operation if the operation is an UPDATE operation.
     *
     * @example 100
     *
     * @var string
     */
    public $oldValue;

    /**
     * @description The type of the operation.
     *
     * @example modify-oversold-ratio
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The user who performed the operation.
     *
     * @example null
     *
     * @var string
     */
    public $operationUser;

    /**
     * @description Indicates whether the request was successful. A value of **1** indicates that the request was successful.
     *
     * @example 1
     *
     * @var int
     */
    public $success;
    protected $_name = [
        'content'       => 'Content',
        'id'            => 'Id',
        'logDatetime'   => 'LogDatetime',
        'newValue'      => 'NewValue',
        'oldValue'      => 'OldValue',
        'operationName' => 'OperationName',
        'operationUser' => 'OperationUser',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->logDatetime) {
            $res['LogDatetime'] = $this->logDatetime;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->operationUser) {
            $res['OperationUser'] = $this->operationUser;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LogDatetime'])) {
            $model->logDatetime = $map['LogDatetime'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['OperationUser'])) {
            $model->operationUser = $map['OperationUser'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
