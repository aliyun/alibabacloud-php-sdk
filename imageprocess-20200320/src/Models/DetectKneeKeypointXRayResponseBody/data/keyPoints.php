<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayResponseBody\data\keyPoints\tag;
use AlibabaCloud\Tea\Model;

class keyPoints extends Model
{
    /**
     * @var float
     */
    public $value;

    /**
     * @var int[]
     */
    public $coordinates;

    /**
     * @var tag
     */
    public $tag;
    protected $_name = [
        'value'       => 'Value',
        'coordinates' => 'Coordinates',
        'tag'         => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->coordinates) {
            $res['Coordinates'] = $this->coordinates;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = $map['Coordinates'];
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
        }

        return $model;
    }
}
