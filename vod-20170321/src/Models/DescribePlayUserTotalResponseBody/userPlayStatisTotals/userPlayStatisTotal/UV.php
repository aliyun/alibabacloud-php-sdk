<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal;

use AlibabaCloud\Tea\Model;

class UV extends Model
{
    /**
     * @description The total number of unique visitors who use ApsaraVideo Player SDK for Android.
     *
     * @example 2
     *
     * @var string
     */
    public $android;

    /**
     * @description The total number of unique visitors who use the Flash player.
     *
     * @example 1
     *
     * @var string
     */
    public $flash;

    /**
     * @description The total number of unique visitors who use the HTML5 player.
     *
     * @example 1
     *
     * @var string
     */
    public $HTML5;

    /**
     * @description The total number of unique visitors who use ApsaraVideo Player SDK for iOS.
     *
     * @example 0
     *
     * @var string
     */
    public $iOS;
    protected $_name = [
        'android' => 'Android',
        'flash'   => 'Flash',
        'HTML5'   => 'HTML5',
        'iOS'     => 'iOS',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UV
     */
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
