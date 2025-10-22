<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class OperateCallCenterForPartnerRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $callAction;

    /**
     * @var string
     */
    public $employeeCode;

    /**
     * @var string
     */
    public $request;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'bizType' => 'BizType',
        'callAction' => 'CallAction',
        'employeeCode' => 'EmployeeCode',
        'request' => 'Request',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->callAction) {
            $res['CallAction'] = $this->callAction;
        }

        if (null !== $this->employeeCode) {
            $res['EmployeeCode'] = $this->employeeCode;
        }

        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['CallAction'])) {
            $model->callAction = $map['CallAction'];
        }

        if (isset($map['EmployeeCode'])) {
            $model->employeeCode = $map['EmployeeCode'];
        }

        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
