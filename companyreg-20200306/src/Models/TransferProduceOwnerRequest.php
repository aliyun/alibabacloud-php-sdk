<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class TransferProduceOwnerRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $employeeCode;

    /**
     * @var int
     */
    public $personId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'bizId' => 'BizId',
        'bizType' => 'BizType',
        'employeeCode' => 'EmployeeCode',
        'personId' => 'PersonId',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->employeeCode) {
            $res['EmployeeCode'] = $this->employeeCode;
        }

        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['EmployeeCode'])) {
            $model->employeeCode = $map['EmployeeCode'];
        }

        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
