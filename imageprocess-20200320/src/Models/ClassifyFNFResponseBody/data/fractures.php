<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponseBody\data\fractures\tag;
use AlibabaCloud\Tea\Model;

class fractures extends Model
{
    /**
     * @var float
     */
    public $value;

    /**
     * @var int[]
     */
    public $boxes;

    /**
     * @var tag
     */
    public $tag;
    protected $_name = [
        'value' => 'Value',
        'boxes' => 'Boxes',
        'tag'   => 'Tag',
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
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
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
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
        }

        return $model;
    }
}
