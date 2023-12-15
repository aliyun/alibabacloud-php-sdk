<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class SearchObjectRequest extends Model
{
    /**
     * @example { "key1": [1, 2, 3], "key2": [1, 2] }
     *
     * @var string
     */
    public $attributes;

    /**
     * @example 2272486399749917832
     *
     * @var string
     */
    public $corpId;

    /**
     * @example ["id1","id2"]
     *
     * @var string
     */
    public $deviceList;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var string
     */
    public $imageContent;

    /**
     * @example http://url
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example Face/Body/Motor/Non-Moto
     *
     * @var string
     */
    public $objectType;

    /**
     * @example 10
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
     * @example YYYY-MM-ddTHH:mm:ssZ
     *
     * @var string
     */
    public $shotTimeEnd;

    /**
     * @example YYYY-MM-ddTHH:mm:ssZ
     *
     * @var string
     */
    public $shotTimeStart;

    /**
     * @example damo
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'attributes'    => 'Attributes',
        'corpId'        => 'CorpId',
        'deviceList'    => 'DeviceList',
        'feature'       => 'Feature',
        'imageContent'  => 'ImageContent',
        'imageUrl'      => 'ImageUrl',
        'objectType'    => 'ObjectType',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'shotTimeEnd'   => 'ShotTimeEnd',
        'shotTimeStart' => 'ShotTimeStart',
        'vendor'        => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
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
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->shotTimeEnd) {
            $res['ShotTimeEnd'] = $this->shotTimeEnd;
        }
        if (null !== $this->shotTimeStart) {
            $res['ShotTimeStart'] = $this->shotTimeStart;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = $map['DeviceList'];
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
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ShotTimeEnd'])) {
            $model->shotTimeEnd = $map['ShotTimeEnd'];
        }
        if (isset($map['ShotTimeStart'])) {
            $model->shotTimeStart = $map['ShotTimeStart'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
