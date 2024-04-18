<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataLimitsRequest extends Model
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
     * @description The data detection status. Valid values:
     *
     *   **0**: The data detection is ready.
     *   **1**: The data detection is running.
     *   **2**: The connectivity test is in progress.
     *   **3**: The connectivity test passed.
     *   **4**: The connectivity test failed.
     *
     * @example 3
     *
     * @var int
     */
    public $checkStatus;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether DSC has the data de-identification permissions on the data asset. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $datamaskStatus;

    /**
     * @description Specifies whether DSC has the data detection permissions on the data asset. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The end of the time range to query The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1616068534877
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The type of the database engine. Valid values include **MySQL**, **SQLServer**, **Oracle**, **PostgreSQL**, and **MongoDB**.
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
     * @description The language of the content within the request and response. Valid values:
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
     * @var int
     */
    public $memberAccount;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The parent ID of the data asset to be queried. Valid values:
     *
     *   The name or ID of the MaxCompute project.
     *   The name or ID of the OSS bucket.
     *   The name or ID of the ApsaraDB RDS instance or database.
     *
     * @example 1112
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The type of the service to which the data asset to be queried belongs. Valid values:
     *
     *   **1**: MaxCompute
     *   **2**: Object Storage Service (OSS)
     *   **3**: AnalyticDB for MySQL
     *   **4**: Tablestore
     *   **5**: ApsaraDB RDS
     *   **6**: self-managed database
     *
     * @example 1
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description The region in which the data asset resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $serviceRegionId;

    /**
     * @description The beginning of the time range to query The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1616068534877
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'auditStatus'     => 'AuditStatus',
        'checkStatus'     => 'CheckStatus',
        'currentPage'     => 'CurrentPage',
        'datamaskStatus'  => 'DatamaskStatus',
        'enable'          => 'Enable',
        'endTime'         => 'EndTime',
        'engineType'      => 'EngineType',
        'featureType'     => 'FeatureType',
        'lang'            => 'Lang',
        'memberAccount'   => 'MemberAccount',
        'pageSize'        => 'PageSize',
        'parentId'        => 'ParentId',
        'resourceType'    => 'ResourceType',
        'serviceRegionId' => 'ServiceRegionId',
        'startTime'       => 'StartTime',
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
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->datamaskStatus) {
            $res['DatamaskStatus'] = $this->datamaskStatus;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataLimitsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DatamaskStatus'])) {
            $model->datamaskStatus = $map['DatamaskStatus'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
