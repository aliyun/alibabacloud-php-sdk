<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListAppInstanceTypeRequest extends Model
{
    /**
     * @var string
     */
    public $appCenterImageId;

    /**
     * @var string
     */
    public $appInstanceType;

    /**
     * @var string
     */
    public $appInstanceTypeFamily;

    /**
     * @var string[]
     */
    public $appInstanceTypeList;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var int
     */
    public $gpuMemory;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $osType;

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
     * @var bool
     */
    public $queryInventory;
    protected $_name = [
        'appCenterImageId' => 'AppCenterImageId',
        'appInstanceType' => 'AppInstanceType',
        'appInstanceTypeFamily' => 'AppInstanceTypeFamily',
        'appInstanceTypeList' => 'AppInstanceTypeList',
        'bizRegionId' => 'BizRegionId',
        'category' => 'Category',
        'chargeType' => 'ChargeType',
        'cpu' => 'Cpu',
        'gpuMemory' => 'GpuMemory',
        'language' => 'Language',
        'memory' => 'Memory',
        'osType' => 'OsType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productType' => 'ProductType',
        'queryInventory' => 'QueryInventory',
    ];

    public function validate()
    {
        if (\is_array($this->appInstanceTypeList)) {
            Model::validateArray($this->appInstanceTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
        }

        if (null !== $this->appInstanceType) {
            $res['AppInstanceType'] = $this->appInstanceType;
        }

        if (null !== $this->appInstanceTypeFamily) {
            $res['AppInstanceTypeFamily'] = $this->appInstanceTypeFamily;
        }

        if (null !== $this->appInstanceTypeList) {
            if (\is_array($this->appInstanceTypeList)) {
                $res['AppInstanceTypeList'] = [];
                $n1 = 0;
                foreach ($this->appInstanceTypeList as $item1) {
                    $res['AppInstanceTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->gpuMemory) {
            $res['GpuMemory'] = $this->gpuMemory;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
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

        if (null !== $this->queryInventory) {
            $res['QueryInventory'] = $this->queryInventory;
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
        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
        }

        if (isset($map['AppInstanceType'])) {
            $model->appInstanceType = $map['AppInstanceType'];
        }

        if (isset($map['AppInstanceTypeFamily'])) {
            $model->appInstanceTypeFamily = $map['AppInstanceTypeFamily'];
        }

        if (isset($map['AppInstanceTypeList'])) {
            if (!empty($map['AppInstanceTypeList'])) {
                $model->appInstanceTypeList = [];
                $n1 = 0;
                foreach ($map['AppInstanceTypeList'] as $item1) {
                    $model->appInstanceTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['GpuMemory'])) {
            $model->gpuMemory = $map['GpuMemory'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
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

        if (isset($map['QueryInventory'])) {
            $model->queryInventory = $map['QueryInventory'];
        }

        return $model;
    }
}
