<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListNodeInstanceTypeRequest extends Model
{
    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $nodeInstanceType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example CloudApp
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'bizRegionId'      => 'BizRegionId',
        'language'         => 'Language',
        'nodeInstanceType' => 'NodeInstanceType',
        'osType'           => 'OsType',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'productType'      => 'ProductType',
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
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->nodeInstanceType) {
            $res['NodeInstanceType'] = $this->nodeInstanceType;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['NodeInstanceType'])) {
            $model->nodeInstanceType = $map['NodeInstanceType'];
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

        return $model;
    }
}
