<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ContentItem\extInfo;

use AlibabaCloud\Dara\Model;

class pos extends Model
{
    /**
     * @var int
     */
    public $x;

    /**
     * @var int
     */
    public $y;
    protected $_name = [
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
        if (isset($map['x'])) {
            $model->x = $map['x'];
        }

        if (isset($map['y'])) {
            $model->y = $map['y'];
        }

        return $model;
    }
}
