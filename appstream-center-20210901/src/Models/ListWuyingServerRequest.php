<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListWuyingServerRequest extends Model
{
    /**
     * @var string[]
     */
    public $addVirtualNodePoolStatusList;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $officeSiteId;

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
    public $productType;

    /**
     * @var string
     */
    public $serverInstanceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $users;

    /**
     * @var string
     */
    public $virtualNodePoolId;

    /**
     * @var string[]
     */
    public $wuyingServerIdList;

    /**
     * @var string
     */
    public $wuyingServerNameOrId;
    protected $_name = [
        'addVirtualNodePoolStatusList' => 'AddVirtualNodePoolStatusList',
        'bizRegionId' => 'BizRegionId',
        'bizType' => 'BizType',
        'chargeType' => 'ChargeType',
        'imageId' => 'ImageId',
        'officeSiteId' => 'OfficeSiteId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productType' => 'ProductType',
        'serverInstanceType' => 'ServerInstanceType',
        'status' => 'Status',
        'users' => 'Users',
        'virtualNodePoolId' => 'VirtualNodePoolId',
        'wuyingServerIdList' => 'WuyingServerIdList',
        'wuyingServerNameOrId' => 'WuyingServerNameOrId',
    ];

    public function validate()
    {
        if (\is_array($this->addVirtualNodePoolStatusList)) {
            Model::validateArray($this->addVirtualNodePoolStatusList);
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        if (\is_array($this->wuyingServerIdList)) {
            Model::validateArray($this->wuyingServerIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addVirtualNodePoolStatusList) {
            if (\is_array($this->addVirtualNodePoolStatusList)) {
                $res['AddVirtualNodePoolStatusList'] = [];
                $n1 = 0;
                foreach ($this->addVirtualNodePoolStatusList as $item1) {
                    $res['AddVirtualNodePoolStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->serverInstanceType) {
            $res['ServerInstanceType'] = $this->serverInstanceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->virtualNodePoolId) {
            $res['VirtualNodePoolId'] = $this->virtualNodePoolId;
        }

        if (null !== $this->wuyingServerIdList) {
            if (\is_array($this->wuyingServerIdList)) {
                $res['WuyingServerIdList'] = [];
                $n1 = 0;
                foreach ($this->wuyingServerIdList as $item1) {
                    $res['WuyingServerIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wuyingServerNameOrId) {
            $res['WuyingServerNameOrId'] = $this->wuyingServerNameOrId;
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
        if (isset($map['AddVirtualNodePoolStatusList'])) {
            if (!empty($map['AddVirtualNodePoolStatusList'])) {
                $model->addVirtualNodePoolStatusList = [];
                $n1 = 0;
                foreach ($map['AddVirtualNodePoolStatusList'] as $item1) {
                    $model->addVirtualNodePoolStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ServerInstanceType'])) {
            $model->serverInstanceType = $map['ServerInstanceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VirtualNodePoolId'])) {
            $model->virtualNodePoolId = $map['VirtualNodePoolId'];
        }

        if (isset($map['WuyingServerIdList'])) {
            if (!empty($map['WuyingServerIdList'])) {
                $model->wuyingServerIdList = [];
                $n1 = 0;
                foreach ($map['WuyingServerIdList'] as $item1) {
                    $model->wuyingServerIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WuyingServerNameOrId'])) {
            $model->wuyingServerNameOrId = $map['WuyingServerNameOrId'];
        }

        return $model;
    }
}
