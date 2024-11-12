<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataCheckTableDetailsRequest extends Model
{
    /**
     * @description The data verification method. Valid values:
     *
     *   **1**: full data verification.
     *   **2**: incremental data verification.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $checkType;

    /**
     * @description The ID of the data migration or data synchronization task. You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the task ID.
     *
     * This parameter is required.
     * @example xd4e4xb419q****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than **0**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The resource group ID.
     *
     * @example rg-aekz4us4iruleja
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the schema whose data is verified in the source database.
     *
     * @example dtstest
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The status of the data verification result. Valid values:
     *
     *   **-1** (default): All status.
     *   **6**: Inconsistent data detected in the table.
     *
     * @example -1
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the table whose data is verified in the source database.
     *
     * @example student
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'checkType'       => 'CheckType',
        'dtsJobId'        => 'DtsJobId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
        'schemaName'      => 'SchemaName',
        'status'          => 'Status',
        'tableName'       => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataCheckTableDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
