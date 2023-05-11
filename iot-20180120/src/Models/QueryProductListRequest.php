<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryProductListRequest extends Model
{
    /**
     * @description The type of the product. Valid values:
     *
     *   **iothub_senior**: A Thing Specification Language (TSL) model is used for the product.
     *   **iothub**: No TSL model is used for the product.
     *
     * >  If you do not configure this parameter, all products are returned.
     * @example iothub_senior
     *
     * @var string
     */
    public $aliyunCommodityCode;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     *
     * > *   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     * > *   If no **Overview** page or ID is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 200.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group to which the product belongs. You can log on to the [Resource Management](https://resourcemanager.console.aliyun.com/resource-groups) console to view the details of the resource group.
     *
     * If you leave this parameter empty, the information about all products in the current account is queried.
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'aliyunCommodityCode' => 'AliyunCommodityCode',
        'currentPage'         => 'CurrentPage',
        'iotInstanceId'       => 'IotInstanceId',
        'pageSize'            => 'PageSize',
        'resourceGroupId'     => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunCommodityCode) {
            $res['AliyunCommodityCode'] = $this->aliyunCommodityCode;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryProductListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunCommodityCode'])) {
            $model->aliyunCommodityCode = $map['AliyunCommodityCode'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
