<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupedInstancesRequest extends Model
{
    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The pagination information.
     *
     * @example test-01
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description An array that consists of the information about the assets.
     *
     * @example groupId
     *
     * @var string
     */
    public $groupField;

    /**
     * @description The number of entries returned on the current page.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether to enable paged query. Default value: **true**. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example ecs
     *
     * @var string
     */
    public $machineTypes;

    /**
     * @description The number of assets on which high-risk vulnerabilities are detected.
     *
     * @example true
     *
     * @var bool
     */
    public $noPage;

    /**
     * @description The type of the server group. Valid values:
     *
     *   **0**: the default group
     *   **1**: other group
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example sas_gt_basic
     *
     * @var string
     */
    public $saleVersionCheckCode;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;

    /**
     * @description The name of the group to which the assets belong. Fuzzy search is supported.
     *
     * @example 0,8
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeGroupedInstancesRequest
     */
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
