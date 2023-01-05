<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoResponseBody\data\elements\results;

use AlibabaCloud\Tea\Model;

class logosData extends Model
{
    /**
     * @example 106
     *
     * @var float
     */
    public $h;

    /**
     * @var string
     */
    public $name;

    /**
     * @example TV
     *
     * @var string
     */
    public $type;

    /**
     * @example 124
     *
     * @var float
     */
    public $w;

    /**
     * @example 107
     *
     * @var float
     */
    public $x;

    /**
     * @example 59
     *
     * @var float
     */
    public $y;
    protected $_name = [
        'h'    => 'H',
        'name' => 'Name',
        'type' => 'Type',
        'w'    => 'W',
        'x'    => 'X',
        'y'    => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->h) {
            $res['H'] = $this->h;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->w) {
            $res['W'] = $this->w;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logosData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['W'])) {
            $model->w = $map['W'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
