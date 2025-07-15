<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;

use AlibabaCloud\Tea\Model;

class bgImageConfig extends Model
{
    /**
     * @description The unique ID of the material.
     *
     * @example k12kj31****
     *
     * @var string
     */
    public $id;

    /**
     * @description The URL of the material.
     *
     * @example http://example.org
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The position ID.
     *
     * @example RV01
     *
     * @var string
     */
    public $locationId;

    /**
     * @description The ID of the material in ApsaraVideo VOD.
     *
     * @example asdfas9df89asd8f9****
     *
     * @var string
     */
    public $materialId;
    protected $_name = [
        'id' => 'Id',
        'imageUrl' => 'ImageUrl',
        'locationId' => 'LocationId',
        'materialId' => 'MaterialId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgImageConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }

        return $model;
    }
}
