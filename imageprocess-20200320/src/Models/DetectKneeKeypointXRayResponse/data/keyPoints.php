<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayResponse\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayResponse\data\keyPoints\tag;
use AlibabaCloud\Tea\Model;

class keyPoints extends Model
{
    /**
     * @var float
     */
    public $value;

    /**
     * @var tag
     */
    public $tag;

    /**
     * @var int[]
     */
    public $coordinates;
    protected $_name = [
        'value'       => 'Value',
        'tag'         => 'Tag',
        'coordinates' => 'Coordinates',
    ];

    public function validate()
    {
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('tag', $this->tag, true);
        Model::validateRequired('coordinates', $this->coordinates, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
        }
        if (null !== $this->coordinates) {
            $res['Coordinates'] = $this->coordinates;
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
        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
        }
        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = $map['Coordinates'];
            }
        }

        return $model;
    }
}
