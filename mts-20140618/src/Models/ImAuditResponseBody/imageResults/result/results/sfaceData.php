<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\sfaceData\faces;

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
        'h' => 'h',
        'w' => 'w',
        'x' => 'x',
        'y' => 'y',
    ];

    public function validate()
    {
        if (\is_array($this->faces)) {
            Model::validateArray($this->faces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faces) {
            if (\is_array($this->faces)) {
                $res['faces'] = [];
                $n1 = 0;
                foreach ($this->faces as $item1) {
                    $res['faces'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['faces'])) {
            if (!empty($map['faces'])) {
                $model->faces = [];
                $n1 = 0;
                foreach ($map['faces'] as $item1) {
                    $model->faces[$n1++] = faces::fromMap($item1);
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
