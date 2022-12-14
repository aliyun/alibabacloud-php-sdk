<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class FaceMakeupRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/FaceMakeup/FaceMakeup8.png
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example whole
     *
     * @var string
     */
    public $makeupType;

    /**
     * @example 0
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 1
     *
     * @var float
     */
    public $strength;
    protected $_name = [
        'imageURL'     => 'ImageURL',
        'makeupType'   => 'MakeupType',
        'resourceType' => 'ResourceType',
        'strength'     => 'Strength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->makeupType) {
            $res['MakeupType'] = $this->makeupType;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->strength) {
            $res['Strength'] = $this->strength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceMakeupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['MakeupType'])) {
            $model->makeupType = $map['MakeupType'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }

        return $model;
    }
}
