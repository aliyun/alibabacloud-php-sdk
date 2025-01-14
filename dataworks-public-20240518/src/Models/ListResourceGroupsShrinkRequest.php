<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListResourceGroupsShrinkRequest extends Model
{
    /**
     * @example rg-aek2kqofrgXXXXX
     *
     * @var string
     */
    public $aliyunResourceGroupId;

    /**
     * @var string
     */
    public $aliyunResourceTagsShrink;

    /**
     * @description The name of a resource group, which is used for fuzzy match.
     *
     * @example Resource
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description *
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
     * @var string
     */
    public $resourceGroupTypesShrink;

    /**
     * @example CreateTime Asc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $statusesShrink;
    protected $_name = [
        'aliyunResourceGroupId'    => 'AliyunResourceGroupId',
        'aliyunResourceTagsShrink' => 'AliyunResourceTags',
        'name'                     => 'Name',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'paymentType'              => 'PaymentType',
        'projectId'                => 'ProjectId',
        'resourceGroupTypesShrink' => 'ResourceGroupTypes',
        'sortBy'                   => 'SortBy',
        'statusesShrink'           => 'Statuses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupId) {
            $res['AliyunResourceGroupId'] = $this->aliyunResourceGroupId;
        }
        if (null !== $this->aliyunResourceTagsShrink) {
            $res['AliyunResourceTags'] = $this->aliyunResourceTagsShrink;
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
        if (null !== $this->resourceGroupTypesShrink) {
            $res['ResourceGroupTypes'] = $this->resourceGroupTypesShrink;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->statusesShrink) {
            $res['Statuses'] = $this->statusesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunResourceGroupId'])) {
            $model->aliyunResourceGroupId = $map['AliyunResourceGroupId'];
        }
        if (isset($map['AliyunResourceTags'])) {
            $model->aliyunResourceTagsShrink = $map['AliyunResourceTags'];
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
            $model->resourceGroupTypesShrink = $map['ResourceGroupTypes'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Statuses'])) {
            $model->statusesShrink = $map['Statuses'];
        }

        return $model;
    }
}
