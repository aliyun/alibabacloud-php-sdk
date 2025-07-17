<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsRequest\aliyunResourceTags;
use AlibabaCloud\Tea\Model;

class ListResourceGroupsRequest extends Model
{
    /**
     * @description Alibaba Cloud Resource Group ID
     *
     * @example rg-aek2kqofrgXXXXX
     *
     * @var string
     */
    public $aliyunResourceGroupId;

    /**
     * @description Alibaba Cloud tag list
     *
     * @var aliyunResourceTags[]
     */
    public $aliyunResourceTags;

    /**
     * @description The name of a resource group, which is used for fuzzy match.
     *
     * @example Resource
     *
     * @var string
     */
    public $name;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The billing method of resource groups. Valid values:
     *
     *   PrePaid
     *   PostPaid
     *
     * @example PrePaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The ID of the DataWorks workspace.
     *
     * @example 1000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The types of resource groups to query. If you do not configure this parameter, only serverless resource groups are returned by default.
     *
     * @var string[]
     */
    public $resourceGroupTypes;

    /**
     * @description The fields used for sorting. Fields such as TriggerTime and StartedTime are supported. The value of this parameter is in the Sort field + Sort by (Desc/Asc) format. By default, results are sorted in ascending order. Valid values:
     *
     *   Id (Desc/Asc): the resource group ID
     *   Name (Desc/Asc): the name of the resource group
     *   Remark (Desc/Asc): the remarks of the resource group
     *   Type (Desc/Asc): the type of the resource group
     *   Status (Desc/Asc): the status of the resource group
     *   Spec (Desc/Asc): the specifications of the resource group
     *   CreateUser (Desc/Asc): the creator of the resource group
     *   CreateTime (Desc/Asc): the time when the resource group is created
     *
     * Default value: CreateTime Asc
     *
     * @example CreateTime Asc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The statuses of resource groups.
     *
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'aliyunResourceGroupId' => 'AliyunResourceGroupId',
        'aliyunResourceTags' => 'AliyunResourceTags',
        'name' => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'paymentType' => 'PaymentType',
        'projectId' => 'ProjectId',
        'resourceGroupTypes' => 'ResourceGroupTypes',
        'sortBy' => 'SortBy',
        'statuses' => 'Statuses',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupId) {
            $res['AliyunResourceGroupId'] = $this->aliyunResourceGroupId;
        }
        if (null !== $this->aliyunResourceTags) {
            $res['AliyunResourceTags'] = [];
            if (null !== $this->aliyunResourceTags && \is_array($this->aliyunResourceTags)) {
                $n = 0;
                foreach ($this->aliyunResourceTags as $item) {
                    $res['AliyunResourceTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceGroupTypes) {
            $res['ResourceGroupTypes'] = $this->resourceGroupTypes;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunResourceGroupId'])) {
            $model->aliyunResourceGroupId = $map['AliyunResourceGroupId'];
        }
        if (isset($map['AliyunResourceTags'])) {
            if (!empty($map['AliyunResourceTags'])) {
                $model->aliyunResourceTags = [];
                $n = 0;
                foreach ($map['AliyunResourceTags'] as $item) {
                    $model->aliyunResourceTags[$n++] = null !== $item ? aliyunResourceTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceGroupTypes'])) {
            if (!empty($map['ResourceGroupTypes'])) {
                $model->resourceGroupTypes = $map['ResourceGroupTypes'];
            }
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }

        return $model;
    }
}
