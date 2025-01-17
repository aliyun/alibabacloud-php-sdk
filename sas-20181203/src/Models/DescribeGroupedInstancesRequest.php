<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeGroupedInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $fieldValue;
    /**
     * @var string
     */
    public $groupField;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $machineTypes;
    /**
     * @var bool
     */
    public $noPage;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $saleVersionCheckCode;
    /**
     * @var int
     */
    public $vendor;
    /**
     * @var string
     */
    public $vendors;
    protected $_name = [
        'currentPage'          => 'CurrentPage',
        'fieldValue'           => 'FieldValue',
        'groupField'           => 'GroupField',
        'lang'                 => 'Lang',
        'machineTypes'         => 'MachineTypes',
        'noPage'               => 'NoPage',
        'pageSize'             => 'PageSize',
        'saleVersionCheckCode' => 'SaleVersionCheckCode',
        'vendor'               => 'Vendor',
        'vendors'              => 'Vendors',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }

        if (null !== $this->groupField) {
            $res['GroupField'] = $this->groupField;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }

        if (null !== $this->noPage) {
            $res['NoPage'] = $this->noPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->saleVersionCheckCode) {
            $res['SaleVersionCheckCode'] = $this->saleVersionCheckCode;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        if (null !== $this->vendors) {
            $res['Vendors'] = $this->vendors;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }

        if (isset($map['GroupField'])) {
            $model->groupField = $map['GroupField'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }

        if (isset($map['NoPage'])) {
            $model->noPage = $map['NoPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SaleVersionCheckCode'])) {
            $model->saleVersionCheckCode = $map['SaleVersionCheckCode'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        if (isset($map['Vendors'])) {
            $model->vendors = $map['Vendors'];
        }

        return $model;
    }
}
