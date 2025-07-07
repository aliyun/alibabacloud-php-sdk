<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListResponseBody\data\todoList;

use AlibabaCloud\Dara\Model;

class processList extends Model
{
    /**
     * @var string
     */
    public $aliyunId;

    /**
     * @var int
     */
    public $auditTime;

    /**
     * @var string
     */
    public $ecId;

    /**
     * @var string
     */
    public $leId;

    /**
     * @var string
     */
    public $nbId;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliyunId' => 'AliyunId',
        'auditTime' => 'AuditTime',
        'ecId' => 'EcId',
        'leId' => 'LeId',
        'nbId' => 'NbId',
        'pk' => 'Pk',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        if (null !== $this->auditTime) {
            $res['AuditTime'] = $this->auditTime;
        }

        if (null !== $this->ecId) {
            $res['EcId'] = $this->ecId;
        }

        if (null !== $this->leId) {
            $res['LeId'] = $this->leId;
        }

        if (null !== $this->nbId) {
            $res['NbId'] = $this->nbId;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        if (isset($map['AuditTime'])) {
            $model->auditTime = $map['AuditTime'];
        }

        if (isset($map['EcId'])) {
            $model->ecId = $map['EcId'];
        }

        if (isset($map['LeId'])) {
            $model->leId = $map['LeId'];
        }

        if (isset($map['NbId'])) {
            $model->nbId = $map['NbId'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
