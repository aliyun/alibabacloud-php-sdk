<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeClusterOperateLogsResponseBody;

use AlibabaCloud\Dara\Model;

class dataPoints extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $logDatetime;
    /**
     * @var string
     */
    public $newValue;
    /**
     * @var string
     */
    public $oldValue;
    /**
     * @var string
     */
    public $operationName;
    /**
     * @var string
     */
    public $operationUser;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
