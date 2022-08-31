<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results;

use AlibabaCloud\Tea\Model;

class logoData extends Model
{
    /**
     * @var float
     */
    public $h;

    /**
     * @var string
     */
    public $name;

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
    public $x;

    /**
     * @var float
     */
    public $y;
    protected $_name = [
        'h'    => 'h',
        'name' => 'name',
        'type' => 'type',
        'w'    => 'w',
        'x'    => 'x',
        'y'    => 'y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->h) {
            $res['h'] = $this->h;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->w) {
            $res['w'] = $this->w;
        }
        if (null !== $this->x) {
            $res['x'] = $this->x;
        }
        if (null !== $this->y) {
            $res['y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logoData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['h'])) {
            $model->h = $map['h'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['w'])) {
            $model->w = $map['w'];
        }
        if (isset($map['x'])) {
            $model->x = $map['x'];
        }
        if (isset($map['y'])) {
            $model->y = $map['y'];
        }

        return $model;
    }
}
