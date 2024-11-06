<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Tea\Model;

class NearbySearchRequest extends Model
{
    /**
     * @description 搜索的关键词
     *
     * @var string
     */
    public $keywords;

    /**
     * @description 搜索范围中心的纬度坐标。小数精度均不得超过六位
     *
     * @var string
     */
    public $latitude;

    /**
     * @description 搜索范围中心的经度坐标。小数精度均不得超过六位
     *
     * @var string
     */
    public $longitude;

    /**
     * @description 搜索的页数
     *
     * @example {\\"total_count\\": 6851, \\"page_number\\": 54, \\"page_size\\": 100}
     *
     * @var int
     */
    public $page;

    /**
     * @description 搜索的范围，以米为单位。
     *
     * @var int
     */
    public $radius;

    /**
     * @description 搜索结果每页所包含的结果数量
     *
     * @example 812788
     *
     * @var int
     */
    public $size;

    /**
     * @description 目标类型的枚举值，以 `|` 标记分隔
     *
     * @example [\\"synonym\\",\\"stopword\\",\\"correction\\",\\"ner\\",\\"term_weighting\\",\\"category_prediction\\"]
     *
     * @var string
     */
    public $types;
    protected $_name = [
        'keywords'  => 'keywords',
        'latitude'  => 'latitude',
        'longitude' => 'longitude',
        'page'      => 'page',
        'radius'    => 'radius',
        'size'      => 'size',
        'types'     => 'types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keywords) {
            $res['keywords'] = $this->keywords;
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->radius) {
            $res['radius'] = $this->radius;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->types) {
            $res['types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NearbySearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keywords'])) {
            $model->keywords = $map['keywords'];
        }
        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }
        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['radius'])) {
            $model->radius = $map['radius'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['types'])) {
            $model->types = $map['types'];
        }

        return $model;
    }
}
