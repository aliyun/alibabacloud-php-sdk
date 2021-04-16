<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class SearchObjectRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var string
     */
    public $imageContent;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $deviceList;

    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $shotTimeStart;

    /**
     * @var string
     */
    public $shotTimeEnd;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'corpId'        => 'CorpId',
        'objectType'    => 'ObjectType',
        'vendor'        => 'Vendor',
        'feature'       => 'Feature',
        'imageContent'  => 'ImageContent',
        'imageUrl'      => 'ImageUrl',
        'deviceList'    => 'DeviceList',
        'attributes'    => 'Attributes',
        'shotTimeStart' => 'ShotTimeStart',
        'shotTimeEnd'   => 'ShotTimeEnd',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->imageContent) {
            $res['ImageContent'] = $this->imageContent;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->shotTimeStart) {
            $res['ShotTimeStart'] = $this->shotTimeStart;
        }
        if (null !== $this->shotTimeEnd) {
            $res['ShotTimeEnd'] = $this->shotTimeEnd;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['ImageContent'])) {
            $model->imageContent = $map['ImageContent'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = $map['DeviceList'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['ShotTimeStart'])) {
            $model->shotTimeStart = $map['ShotTimeStart'];
        }
        if (isset($map['ShotTimeEnd'])) {
            $model->shotTimeEnd = $map['ShotTimeEnd'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
