<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListNodeInstanceTypeRequest extends Model
{
    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var float
     */
    public $gpu;

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
    public $nodeInstanceType;

    /**
     * @var string
     */
    public $nodeInstanceTypeFamily;

    /**
     * @var string
     */
    public $orderBy;

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
     * @var string
     */
    public $sortType;
    protected $_name = [
        'bizRegionId' => 'BizRegionId',
        'cpu' => 'Cpu',
        'gpu' => 'Gpu',
        'gpuMemory' => 'GpuMemory',
        'language' => 'Language',
        'memory' => 'Memory',
        'nodeInstanceType' => 'NodeInstanceType',
        'nodeInstanceTypeFamily' => 'NodeInstanceTypeFamily',
        'orderBy' => 'OrderBy',
        'osType' => 'OsType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productType' => 'ProductType',
        'sortType' => 'SortType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
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

        if (null !== $this->nodeInstanceType) {
            $res['NodeInstanceType'] = $this->nodeInstanceType;
        }

        if (null !== $this->nodeInstanceTypeFamily) {
            $res['NodeInstanceTypeFamily'] = $this->nodeInstanceTypeFamily;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
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

        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
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
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
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

        if (isset($map['NodeInstanceType'])) {
            $model->nodeInstanceType = $map['NodeInstanceType'];
        }

        if (isset($map['NodeInstanceTypeFamily'])) {
            $model->nodeInstanceTypeFamily = $map['NodeInstanceTypeFamily'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
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

        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        return $model;
    }
}
