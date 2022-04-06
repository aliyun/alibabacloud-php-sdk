<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayResponseBody\data\keyPoints\tag;
use AlibabaCloud\Tea\Model;

class keyPoints extends Model
{
    /**
     * @var int[]
     */
    public $coordinates;

    /**
     * @var tag
     */
    public $tag;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'coordinates' => 'Coordinates',
        'tag'         => 'Tag',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coordinates) {
            $res['Coordinates'] = $this->coordinates;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = $map['Coordinates'];
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
