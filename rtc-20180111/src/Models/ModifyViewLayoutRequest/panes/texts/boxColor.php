<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyViewLayoutRequest\panes\texts;

use AlibabaCloud\Dara\Model;

class boxColor extends Model
{
    /**
     * @var int
     */
    public $b;

    /**
     * @var int
     */
    public $g;

    /**
     * @var int
     */
    public $r;
    protected $_name = [
        'b' => 'B',
        'g' => 'G',
        'r' => 'R',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->b) {
            $res['B'] = $this->b;
        }

        if (null !== $this->g) {
            $res['G'] = $this->g;
        }

        if (null !== $this->r) {
            $res['R'] = $this->r;
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
        if (isset($map['B'])) {
            $model->b = $map['B'];
        }

        if (isset($map['G'])) {
            $model->g = $map['G'];
        }

        if (isset($map['R'])) {
            $model->r = $map['R'];
        }

        return $model;
    }
}
