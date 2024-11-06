<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\NearbySearchResponseBody;

use AlibabaCloud\SDK\IQS\V20240712\Models\NearbySearchResponseBody\data\images;
use AlibabaCloud\SDK\IQS\V20240712\Models\NearbySearchResponseBody\data\metadata;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $distanceMeter;

    /**
     * @var string
     */
    public $districtCode;

    /**
     * @var string
     */
    public $districtName;

    /**
     * @example 38865
     *
     * @var string
     */
    public $id;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @example hydro-project/hydro-res-auth
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $provinceCode;

    /**
     * @var string
     */
    public $provinceName;

    /**
     * @var string
     */
    public $typeCode;

    /**
     * @example [\\"synonym\\",\\"stopword\\",\\"correction\\",\\"category_prediction\\",\\"ner\\",\\"term_weighting\\"]
     *
     * @var string
     */
    public $types;
    protected $_name = [
        'address'       => 'address',
        'cityCode'      => 'cityCode',
        'cityName'      => 'cityName',
        'distanceMeter' => 'distanceMeter',
        'districtCode'  => 'districtCode',
        'districtName'  => 'districtName',
        'id'            => 'id',
        'images'        => 'images',
        'latitude'      => 'latitude',
        'longitude'     => 'longitude',
        'metadata'      => 'metadata',
        'name'          => 'name',
        'provinceCode'  => 'provinceCode',
        'provinceName'  => 'provinceName',
        'typeCode'      => 'typeCode',
        'types'         => 'types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->cityCode) {
            $res['cityCode'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['cityName'] = $this->cityName;
        }
        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }
        if (null !== $this->districtCode) {
            $res['districtCode'] = $this->districtCode;
        }
        if (null !== $this->districtName) {
            $res['districtName'] = $this->districtName;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->images) {
            $res['images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->provinceCode) {
            $res['provinceCode'] = $this->provinceCode;
        }
        if (null !== $this->provinceName) {
            $res['provinceName'] = $this->provinceName;
        }
        if (null !== $this->typeCode) {
            $res['typeCode'] = $this->typeCode;
        }
        if (null !== $this->types) {
            $res['types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['cityCode'])) {
            $model->cityCode = $map['cityCode'];
        }
        if (isset($map['cityName'])) {
            $model->cityName = $map['cityName'];
        }
        if (isset($map['distanceMeter'])) {
            $model->distanceMeter = $map['distanceMeter'];
        }
        if (isset($map['districtCode'])) {
            $model->districtCode = $map['districtCode'];
        }
        if (isset($map['districtName'])) {
            $model->districtName = $map['districtName'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }
        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }
        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['provinceCode'])) {
            $model->provinceCode = $map['provinceCode'];
        }
        if (isset($map['provinceName'])) {
            $model->provinceName = $map['provinceName'];
        }
        if (isset($map['typeCode'])) {
            $model->typeCode = $map['typeCode'];
        }
        if (isset($map['types'])) {
            $model->types = $map['types'];
        }

        return $model;
    }
}
