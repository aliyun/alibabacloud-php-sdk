<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeResponseBody;

use AlibabaCloud\Dara\Model;

class backgroundColors extends Model
{
    /**
     * @var int
     */
    public $red;
    /**
     * @var int
     */
    public $green;
    /**
     * @var int
     */
    public $blue;
    /**
     * @var string
     */
    public $hexString;
    protected $_name = [
        'red'       => 'Red',
        'green'     => 'Green',
        'blue'      => 'Blue',
        'hexString' => 'HexString',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->red) {
            $res['Red'] = $this->red;
        }

        if (null !== $this->green) {
            $res['Green'] = $this->green;
        }

        if (null !== $this->blue) {
            $res['Blue'] = $this->blue;
        }

        if (null !== $this->hexString) {
            $res['HexString'] = $this->hexString;
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
        if (isset($map['Red'])) {
            $model->red = $map['Red'];
        }

        if (isset($map['Green'])) {
            $model->green = $map['Green'];
        }

        if (isset($map['Blue'])) {
            $model->blue = $map['Blue'];
        }

        if (isset($map['HexString'])) {
            $model->hexString = $map['HexString'];
        }

        return $model;
    }
}
