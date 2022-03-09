<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomCreateOrderResponseBody\resultObj\isvUserMap;

use AlibabaCloud\Tea\Model;

class CUSTOMER extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $ext1;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isvUserId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $phone;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'companyId'   => 'CompanyId',
        'datasetId'   => 'DatasetId',
        'email'       => 'Email',
        'ext1'        => 'Ext1',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'isvUserId'   => 'IsvUserId',
        'name'        => 'Name',
        'orderId'     => 'OrderId',
        'phone'       => 'Phone',
        'serviceType' => 'ServiceType',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->ext1) {
            $res['Ext1'] = $this->ext1;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isvUserId) {
            $res['IsvUserId'] = $this->isvUserId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CUSTOMER
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Ext1'])) {
            $model->ext1 = $map['Ext1'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsvUserId'])) {
            $model->isvUserId = $map['IsvUserId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
