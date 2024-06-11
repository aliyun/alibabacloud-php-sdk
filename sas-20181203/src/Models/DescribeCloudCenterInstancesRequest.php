<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudCenterInstancesRequest extends Model
{
    /**
     * @description The search conditions. The value of this parameter is in the JSON format and is case-sensitive.
     *
     * >  You can search for an asset by using the search conditions, such as the instance ID, instance name, VPC ID, region, or public IP address. You can call the [DescribeCriteria](https://help.aliyun.com/document_detail/149773.html) operation to query the supported search conditions.
     * @example [{"name":"riskStatus","value":"YES"},{"name":"internetIp","value":"1.2.XX.XX"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The importance of the asset. Valid values:
     *
     *   **2**: an important asset
     *   **1**: a common asset
     *   **0**: a test asset
     *
     * @example 2
     *
     * @var int
     */
    public $importance;

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
     * @description The logical relationship among multiple search conditions. Valid values:
     *
     *   **OR**: The logical relationship among search conditions is **OR**.
     *   **AND**: The logical relationship among search conditions is **AND**.
     *
     * @example OR
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description The type of the assets that you want to query. Valid values:
     *
     *   **ecs**: servers
     *   **cloud_product**: Alibaba Cloud service
     *
     * @example ecs
     *
     * @var string
     */
    public $machineTypes;

    /**
     * @description The value of NextToken that is returned when the NextToken method is used. You do not need to specify this parameter for the first request.
     *
     * @example E17B501887A2D3AA5E8360A6EFA3B***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Specifies whether to internationalize the name of the default group. Valid values:
     *
     *   **true**: The system returns the Chinese name of the default group for the GroupTrace response parameter.
     *   **false**: The system returns default for the GroupTrace response parameter.
     *
     * @example false
     *
     * @var bool
     */
    public $noGroupTrace;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region in which the asset resides.
     *
     * @example cn-hangzhou
     *
     * @deprecated
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  You can call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation to obtain the IDs.
     * @example 1232428423234****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description Specifies whether to use the NextToken method to retrieve a new page of results. If you set UseNextToken to true, the value of TotalCount is not returned. Valid values:
     *
     * - **true**: The NextToken method is used.
     * - **false**: The NextToken method is not used.
     * @example false
     *
     * @var bool
     */
    public $useNextToken;
    protected $_name = [
        'criteria'                   => 'Criteria',
        'currentPage'                => 'CurrentPage',
        'importance'                 => 'Importance',
        'lang'                       => 'Lang',
        'logicalExp'                 => 'LogicalExp',
        'machineTypes'               => 'MachineTypes',
        'nextToken'                  => 'NextToken',
        'noGroupTrace'               => 'NoGroupTrace',
        'pageSize'                   => 'PageSize',
        'regionId'                   => 'RegionId',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'useNextToken'               => 'UseNextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->importance) {
            $res['Importance'] = $this->importance;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->noGroupTrace) {
            $res['NoGroupTrace'] = $this->noGroupTrace;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->useNextToken) {
            $res['UseNextToken'] = $this->useNextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudCenterInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Importance'])) {
            $model->importance = $map['Importance'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NoGroupTrace'])) {
            $model->noGroupTrace = $map['NoGroupTrace'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['UseNextToken'])) {
            $model->useNextToken = $map['UseNextToken'];
        }

        return $model;
    }
}
