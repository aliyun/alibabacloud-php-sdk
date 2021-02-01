<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoResponseBody\data\elements\results;

use AlibabaCloud\Tea\Model;

class logosData extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var float
     */
    public $w;

    /**
     * @var float
     */
    public $h;

    /**
     * @var float
     */
    public $y;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $x;
    protected $_name = [
        'type' => 'Type',
        'w'    => 'W',
        'h'    => 'H',
        'y'    => 'Y',
        'name' => 'Name',
        'x'    => 'X',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->w) {
            $res['W'] = $this->w;
        }
        if (null !== $this->h) {
            $res['H'] = $this->h;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['W'])) {
            $model->w = $map['W'];
        }
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        return $model;
    }
}
