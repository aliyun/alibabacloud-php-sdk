<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20190325\Models;

use AlibabaCloud\Tea\Model;

class SearchImageRequest extends Model
{
    /**
     * @example 88888888
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example true
     *
     * @var bool
     */
    public $crop;

    /**
     * @example (int_attr >= 100000000 AND int_attr < 200000000 AND int_attr=100000252 AND str_attr=\"87\")
     *
     * @var string
     */
    public $filter;

    /**
     * @example phimagesearch
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 10
     *
     * @var int
     */
    public $num;

    /**
     * @example iVBORw0KGgoAAAANSUhEUgAAAV8AAADwAQMAAACdRvVNAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAADUExURQAAAKd6PdoAAAABdFJOUyR85Ty3AAAAIUlEQVRo3u3BAQ0AAADCoPdPbQ8HFAAAAAAAAAAAAADPBiowAAGR02EbAAAAAElFTkSuQmCC
     *
     * @var string
     */
    public $picContent;

    /**
     * @example goods-23312-1
     *
     * @var string
     */
    public $picName;

    /**
     * @example pro-goods-25376
     *
     * @var string
     */
    public $productId;

    /**
     * @example 32,282,43,256
     *
     * @var string
     */
    public $region;

    /**
     * @example 0
     *
     * @var int
     */
    public $start;

    /**
     * @example SearchByPic
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'categoryId'   => 'CategoryId',
        'crop'         => 'Crop',
        'filter'       => 'Filter',
        'instanceName' => 'InstanceName',
        'num'          => 'Num',
        'picContent'   => 'PicContent',
        'picName'      => 'PicName',
        'productId'    => 'ProductId',
        'region'       => 'Region',
        'start'        => 'Start',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->picContent) {
            $res['PicContent'] = $this->picContent;
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['PicContent'])) {
            $model->picContent = $map['PicContent'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
