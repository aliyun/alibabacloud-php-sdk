<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\ListEnterpriseInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $auditDesc;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $enterpriseName;

    /**
     * @var string
     */
    public $managerContactNumber;

    /**
     * @var string
     */
    public $managerName;

    /**
     * @var string
     */
    public $organizationCode;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'auditDesc' => 'AuditDesc',
        'enterpriseId' => 'EnterpriseId',
        'enterpriseName' => 'EnterpriseName',
        'managerContactNumber' => 'ManagerContactNumber',
        'managerName' => 'ManagerName',
        'organizationCode' => 'OrganizationCode',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditDesc) {
            $res['AuditDesc'] = $this->auditDesc;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->enterpriseName) {
            $res['EnterpriseName'] = $this->enterpriseName;
        }

        if (null !== $this->managerContactNumber) {
            $res['ManagerContactNumber'] = $this->managerContactNumber;
        }

        if (null !== $this->managerName) {
            $res['ManagerName'] = $this->managerName;
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
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
        if (isset($map['AuditDesc'])) {
            $model->auditDesc = $map['AuditDesc'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['EnterpriseName'])) {
            $model->enterpriseName = $map['EnterpriseName'];
        }

        if (isset($map['ManagerContactNumber'])) {
            $model->managerContactNumber = $map['ManagerContactNumber'];
        }

        if (isset($map['ManagerName'])) {
            $model->managerName = $map['ManagerName'];
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
