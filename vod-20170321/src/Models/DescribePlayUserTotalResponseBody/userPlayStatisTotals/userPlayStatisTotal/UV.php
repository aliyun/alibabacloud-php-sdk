<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal;

use AlibabaCloud\Dara\Model;

class UV extends Model
{
    /**
     * @var string
     */
    public $android;

    /**
     * @var string
     */
    public $flash;

    /**
     * @var string
     */
    public $HTML5;

    /**
     * @var string
     */
    public $iOS;
    protected $_name = [
        'android' => 'Android',
        'flash' => 'Flash',
        'HTML5' => 'HTML5',
        'iOS' => 'iOS',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->android) {
            $res['Android'] = $this->android;
        }

        if (null !== $this->flash) {
            $res['Flash'] = $this->flash;
        }

        if (null !== $this->HTML5) {
            $res['HTML5'] = $this->HTML5;
        }

        if (null !== $this->iOS) {
            $res['iOS'] = $this->iOS;
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
        if (isset($map['Android'])) {
            $model->android = $map['Android'];
        }

        if (isset($map['Flash'])) {
            $model->flash = $map['Flash'];
        }

        if (isset($map['HTML5'])) {
            $model->HTML5 = $map['HTML5'];
        }

        if (isset($map['iOS'])) {
            $model->iOS = $map['iOS'];
        }

        return $model;
    }
}
