<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results;

use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\sfaceData\faces;
use AlibabaCloud\Tea\Model;

class sfaceData extends Model
{
    /**
     * @var faces[]
     */
    public $faces;

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
        'faces' => 'faces',
        'h'     => 'h',
        'w'     => 'w',
        'x'     => 'x',
        'y'     => 'y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faces) {
            $res['faces'] = [];
            if (null !== $this->faces && \is_array($this->faces)) {
                $n = 0;
                foreach ($this->faces as $item) {
                    $res['faces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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

    /**
     * @param array $map
     *
     * @return sfaceData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['faces'])) {
            if (!empty($map['faces'])) {
                $model->faces = [];
                $n            = 0;
                foreach ($map['faces'] as $item) {
                    $model->faces[$n++] = null !== $item ? faces::fromMap($item) : $item;
                }
            }
        }
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
