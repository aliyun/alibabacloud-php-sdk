<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceSourcesRequest extends Model
{
    /**
     * @description Specifies whether to enable the security audit feature. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $auditStatus;

    /**
     * @description Specifies whether DSC is authorized to access the data asset.
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $authStatus;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The type of the database engine. Valid values: **MySQL, MariaDB, Oracle, PostgreSQL, and SQLServer**.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engineType;

    /**
     * @description This parameter is deprecated.
     *
     * @example 2
     *
     * @var int
     */
    public $featureType;

    /**
     * @description The ID of the instance.
     *
     * @example instance-demo-****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh_cn**: Simplified Chinese (default)
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the service to which the data asset to query belongs. Valid values: **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example MaxCompute
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the service to which the data asset to query belongs. Valid values: **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates Object Storage Service (OSS). The value indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 1
     *
     * @var int
     */
    public $productId;

    /**
     * @description The content based on which a fuzzy search is performed.
     *
     * @example 1
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The data asset type based on which a fuzzy search is performed.
     *
     *   **InstanceId**: the ID of the instance.
     *   **InstanceName**: the name of the instance.
     *   **DatabaseName**: the name of the database.
     *
     * @example InstanceId
     *
     * @var string
     */
    public $searchType;

    /**
     * @description The region in which the data asset resides. For more information, see [Supported regions](~~214257~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $serviceRegionId;
    protected $_name = [
        'auditStatus'     => 'AuditStatus',
        'authStatus'      => 'AuthStatus',
        'currentPage'     => 'CurrentPage',
        'engineType'      => 'EngineType',
        'featureType'     => 'FeatureType',
        'instanceId'      => 'InstanceId',
        'lang'            => 'Lang',
        'pageSize'        => 'PageSize',
        'productCode'     => 'ProductCode',
        'productId'       => 'ProductId',
        'searchKey'       => 'SearchKey',
        'searchType'      => 'SearchType',
        'serviceRegionId' => 'ServiceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        return $model;
    }
}
