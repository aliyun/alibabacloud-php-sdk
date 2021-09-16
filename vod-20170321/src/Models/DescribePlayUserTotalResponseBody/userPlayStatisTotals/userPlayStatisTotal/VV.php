<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal;

use AlibabaCloud\Tea\Model;

class VV extends Model
{
    /**
     * @var string
     */
    public $flash;

    /**
     * @var string
     */
    public $iOS;

    /**
     * @var string
     */
    public $HTML5;

    /**
     * @var string
     */
    public $android;
    protected $_name = [
        'flash'   => 'Flash',
        'iOS'     => 'iOS',
        'HTML5'   => 'HTML5',
        'android' => 'Android',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flash) {
            $res['Flash'] = $this->flash;
        }
        if (null !== $this->iOS) {
            $res['iOS'] = $this->iOS;
        }
        if (null !== $this->HTML5) {
            $res['HTML5'] = $this->HTML5;
        }
        if (null !== $this->android) {
            $res['Android'] = $this->android;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VV
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flash'])) {
            $model->flash = $map['Flash'];
        }
        if (isset($map['iOS'])) {
            $model->iOS = $map['iOS'];
        }
        if (isset($map['HTML5'])) {
            $model->HTML5 = $map['HTML5'];
        }
        if (isset($map['Android'])) {
            $model->android = $map['Android'];
        }

        return $model;
    }
}
