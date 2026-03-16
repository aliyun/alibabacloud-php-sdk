<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourceGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $aliyunResourceGroupIds;

    /**
     * @var string
     */
    public $businessChannel;

    /**
     * @var int
     */
    public $needContainResourceGroupWithOfficeSite;

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
    public $platform;

    /**
     * @var string[]
     */
    public $resourceGroupIds;

    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'aliyunResourceGroupIds' => 'AliyunResourceGroupIds',
        'businessChannel' => 'BusinessChannel',
        'needContainResourceGroupWithOfficeSite' => 'NeedContainResourceGroupWithOfficeSite',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'platform' => 'Platform',
        'resourceGroupIds' => 'ResourceGroupIds',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->aliyunResourceGroupIds)) {
            Model::validateArray($this->aliyunResourceGroupIds);
        }
        if (\is_array($this->resourceGroupIds)) {
            Model::validateArray($this->resourceGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupIds) {
            if (\is_array($this->aliyunResourceGroupIds)) {
                $res['AliyunResourceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->aliyunResourceGroupIds as $item1) {
                    $res['AliyunResourceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->businessChannel) {
            $res['BusinessChannel'] = $this->businessChannel;
        }

        if (null !== $this->needContainResourceGroupWithOfficeSite) {
            $res['NeedContainResourceGroupWithOfficeSite'] = $this->needContainResourceGroupWithOfficeSite;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->resourceGroupIds) {
            if (\is_array($this->resourceGroupIds)) {
                $res['ResourceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->resourceGroupIds as $item1) {
                    $res['ResourceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
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
        if (isset($map['AliyunResourceGroupIds'])) {
            if (!empty($map['AliyunResourceGroupIds'])) {
                $model->aliyunResourceGroupIds = [];
                $n1 = 0;
                foreach ($map['AliyunResourceGroupIds'] as $item1) {
                    $model->aliyunResourceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BusinessChannel'])) {
            $model->businessChannel = $map['BusinessChannel'];
        }

        if (isset($map['NeedContainResourceGroupWithOfficeSite'])) {
            $model->needContainResourceGroupWithOfficeSite = $map['NeedContainResourceGroupWithOfficeSite'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = [];
                $n1 = 0;
                foreach ($map['ResourceGroupIds'] as $item1) {
                    $model->resourceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
