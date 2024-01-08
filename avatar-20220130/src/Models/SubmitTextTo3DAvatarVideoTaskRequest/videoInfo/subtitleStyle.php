<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo3DAvatarVideoTaskRequest\videoInfo;

use AlibabaCloud\Tea\Model;

class subtitleStyle extends Model
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outlineColor;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $y;
    protected $_name = [
        'color'        => 'Color',
        'name'         => 'Name',
        'outlineColor' => 'OutlineColor',
        'size'         => 'Size',
        'y'            => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outlineColor) {
            $res['OutlineColor'] = $this->outlineColor;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitleStyle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutlineColor'])) {
            $model->outlineColor = $map['OutlineColor'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
