<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupedInstancesRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the group to which the assets belong. Fuzzy search is supported.
     *
     * @example test-01
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The filter condition that you want to use to query the assets. Valid values:
     *
     *   **groupId**: the group to which the assets belong
     *   **regionId**: the region in which the assets reside
     *   **vpcInstanceId**: the virtual private cloud (VPC) in which the assets reside
     *
     * This parameter is required.
     * @example groupId
     *
     * @var string
     */
    public $groupField;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The type of the assets that you want to query. Set the value to **ecs**, which indicates Elastic Compute Service (ECS) instances.
     *
     * @example ecs
     *
     * @var string
     */
    public $machineTypes;

    /**
     * @description Specifies whether to enable paged query. Default value: **true**. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $noPage;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The edition of Security Center that protects the asset. Valid values:
     *
     * **sas_gte_advanced**: the Advanced edition or higher
     * **sas_gte_enterprise**: the Enterprise edition or higher
     * **sas_gt_basic:** a paid edition
     * **sas_eq_advanced:** the Advanced edition
     * **sas_gt_anti_virus:** an edition higher than the Anti-virus edition
     *
     * @example sas_gt_basic
     *
     * @var string
     */
    public $saleVersionCheckCode;

    /**
     * @description The source of the server. Valid values:
     *
     *   **0**: an asset provided by Alibaba Cloud.
     *   **1**: a third-party cloud server
     *   **2**: a server in a data center
     *   **3**, **4**, **5**, and **7**: other cloud asset
     *   **8**: a lightweight asset
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;

    /**
     * @description The source of the server. Separate multiple sources with commas (,).Valid values:
     *
     *   **0**: an asset provided by Alibaba Cloud.
     *   **1**: a third-party cloud server
     *   **2**: a server in a data center
     *   **3**, **4**, **5**, and **7**: other cloud asset
     *   **8**: a lightweight asset
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
