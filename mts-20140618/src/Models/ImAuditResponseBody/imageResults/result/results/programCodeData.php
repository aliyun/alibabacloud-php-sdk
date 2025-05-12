<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results;

use AlibabaCloud\Dara\Model;

class programCodeData extends Model
{
    /**
     * @var float
     */
    public $h;

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
        'h' => 'h',
        'w' => 'w',
        'x' => 'x',
        'y' => 'y',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->h) {
            $res['h'] = $this->h;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['h'])) {
            $model->h = $map['h'];
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
