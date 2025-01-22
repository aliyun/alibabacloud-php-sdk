<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsRequest\aliyunResourceTags;

class ListResourceGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunResourceGroupId;
    /**
     * @var aliyunResourceTags[]
     */
    public $aliyunResourceTags;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $paymentType;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string[]
     */
    public $resourceGroupTypes;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'aliyunResourceGroupId' => 'AliyunResourceGroupId',
        'aliyunResourceTags'    => 'AliyunResourceTags',
        'name'                  => 'Name',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'paymentType'           => 'PaymentType',
        'projectId'             => 'ProjectId',
        'resourceGroupTypes'    => 'ResourceGroupTypes',
        'sortBy'                => 'SortBy',
        'statuses'              => 'Statuses',
    ];

    public function validate()
    {
        if (\is_array($this->aliyunResourceTags)) {
            Model::validateArray($this->aliyunResourceTags);
        }
        if (\is_array($this->resourceGroupTypes)) {
            Model::validateArray($this->resourceGroupTypes);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupId) {
            $res['AliyunResourceGroupId'] = $this->aliyunResourceGroupId;
        }

        if (null !== $this->aliyunResourceTags) {
            if (\is_array($this->aliyunResourceTags)) {
                $res['AliyunResourceTags'] = [];
                $n1                        = 0;
                foreach ($this->aliyunResourceTags as $item1) {
                    $res['AliyunResourceTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->resourceGroupTypes)) {
                $res['ResourceGroupTypes'] = [];
                $n1                        = 0;
                foreach ($this->resourceGroupTypes as $item1) {
                    $res['ResourceGroupTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1              = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AliyunResourceGroupId'])) {
            $model->aliyunResourceGroupId = $map['AliyunResourceGroupId'];
        }

        if (isset($map['AliyunResourceTags'])) {
            if (!empty($map['AliyunResourceTags'])) {
                $model->aliyunResourceTags = [];
                $n1                        = 0;
                foreach ($map['AliyunResourceTags'] as $item1) {
                    $model->aliyunResourceTags[$n1++] = aliyunResourceTags::fromMap($item1);
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
                $model->resourceGroupTypes = [];
                $n1                        = 0;
                foreach ($map['ResourceGroupTypes'] as $item1) {
                    $model->resourceGroupTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1              = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
