<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CioMarketPop\V20250709\Models\GetEveryOneSellsFormListResponse;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $virtualMainDepartment;

    /**
     * @var string
     */
    public $virtualDepartmentName;

    /**
     * @var string
     */
    public $virtualDepartmentCode;

    /**
     * @var string
     */
    public $virtualParentDepartment;

    /**
     * @var string
     */
    public $virtualDepartmentStatus;

    /**
     * @var string
     */
    public $dingId;

    /**
     * @var string
     */
    public $empStatus;
    protected $_name = [
        'id' => 'Id',
        'virtualMainDepartment' => 'VirtualMainDepartment',
        'virtualDepartmentName' => 'VirtualDepartmentName',
        'virtualDepartmentCode' => 'VirtualDepartmentCode',
        'virtualParentDepartment' => 'VirtualParentDepartment',
        'virtualDepartmentStatus' => 'VirtualDepartmentStatus',
        'dingId' => 'DingId',
        'empStatus' => 'EmpStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->virtualMainDepartment) {
            $res['VirtualMainDepartment'] = $this->virtualMainDepartment;
        }

        if (null !== $this->virtualDepartmentName) {
            $res['VirtualDepartmentName'] = $this->virtualDepartmentName;
        }

        if (null !== $this->virtualDepartmentCode) {
            $res['VirtualDepartmentCode'] = $this->virtualDepartmentCode;
        }

        if (null !== $this->virtualParentDepartment) {
            $res['VirtualParentDepartment'] = $this->virtualParentDepartment;
        }

        if (null !== $this->virtualDepartmentStatus) {
            $res['VirtualDepartmentStatus'] = $this->virtualDepartmentStatus;
        }

        if (null !== $this->dingId) {
            $res['DingId'] = $this->dingId;
        }

        if (null !== $this->empStatus) {
            $res['EmpStatus'] = $this->empStatus;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['VirtualMainDepartment'])) {
            $model->virtualMainDepartment = $map['VirtualMainDepartment'];
        }

        if (isset($map['VirtualDepartmentName'])) {
            $model->virtualDepartmentName = $map['VirtualDepartmentName'];
        }

        if (isset($map['VirtualDepartmentCode'])) {
            $model->virtualDepartmentCode = $map['VirtualDepartmentCode'];
        }

        if (isset($map['VirtualParentDepartment'])) {
            $model->virtualParentDepartment = $map['VirtualParentDepartment'];
        }

        if (isset($map['VirtualDepartmentStatus'])) {
            $model->virtualDepartmentStatus = $map['VirtualDepartmentStatus'];
        }

        if (isset($map['DingId'])) {
            $model->dingId = $map['DingId'];
        }

        if (isset($map['EmpStatus'])) {
            $model->empStatus = $map['EmpStatus'];
        }

        return $model;
    }
}
