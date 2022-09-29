<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class FaceMakeupAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var string
     */
    public $makeupType;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var float
     */
    public $strength;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'makeupType'     => 'MakeupType',
        'resourceType'   => 'ResourceType',
        'strength'       => 'Strength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
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
     * @return FaceMakeupAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
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
