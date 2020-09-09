<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponse\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponse\data\fractures\tag;
use AlibabaCloud\Tea\Model;

class fractures extends Model
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
    public $boxes;
    protected $_name = [
        'value' => 'Value',
        'tag'   => 'Tag',
        'boxes' => 'Boxes',
    ];

    public function validate()
    {
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('tag', $this->tag, true);
        Model::validateRequired('boxes', $this->boxes, true);
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
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fractures
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
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }

        return $model;
    }
}
