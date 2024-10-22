<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListNodeInstanceTypeRequest extends Model
{
    /**
     * @description 资源所属的地域ID。关于支持的地域详情，请参见[使用限制](https://help.aliyun.com/document_detail/426036.html)。
     *
     * @example cn-hangzhou
     *
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
     * @description 语言类型。
     *
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $memory;

    /**
     * @example appstreaming.vgpu.4c8g.2g
     *
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
     * @description 支持的操作系统类型。
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $sortType;
    protected $_name = [
        'bizRegionId'            => 'BizRegionId',
        'cpu'                    => 'Cpu',
        'gpu'                    => 'Gpu',
        'gpuMemory'              => 'GpuMemory',
        'language'               => 'Language',
        'memory'                 => 'Memory',
        'nodeInstanceType'       => 'NodeInstanceType',
        'nodeInstanceTypeFamily' => 'NodeInstanceTypeFamily',
        'orderBy'                => 'OrderBy',
        'osType'                 => 'OsType',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'productType'            => 'ProductType',
        'sortType'               => 'SortType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListNodeInstanceTypeRequest
     */
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
