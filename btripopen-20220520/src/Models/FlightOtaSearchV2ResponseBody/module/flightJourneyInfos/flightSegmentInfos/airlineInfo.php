<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2ResponseBody\module\flightJourneyInfos\flightSegmentInfos;

use AlibabaCloud\Tea\Model;

class airlineInfo extends Model
{
    /**
     * @var string
     */
    public $airlineChineseName;

    /**
     * @var string
     */
    public $airlineChineseShortName;

    /**
     * @example MU
     *
     * @var string
     */
    public $airlineCode;

    /**
     * @example https://gw.alicdn.com/tfs/TB15EXDFHY1gK0jSZTEXXXDQVXa-450-450.png_80x80.jpg
     *
     * @var string
     */
    public $airlineIcon;

    /**
     * @example false
     *
     * @var bool
     */
    public $cheapFlight;
    protected $_name = [
        'airlineChineseName'      => 'airline_chinese_name',
        'airlineChineseShortName' => 'airline_chinese_short_name',
        'airlineCode'             => 'airline_code',
        'airlineIcon'             => 'airline_icon',
        'cheapFlight'             => 'cheap_flight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airlineChineseName) {
            $res['airline_chinese_name'] = $this->airlineChineseName;
        }
        if (null !== $this->airlineChineseShortName) {
            $res['airline_chinese_short_name'] = $this->airlineChineseShortName;
        }
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }
        if (null !== $this->airlineIcon) {
            $res['airline_icon'] = $this->airlineIcon;
        }
        if (null !== $this->cheapFlight) {
            $res['cheap_flight'] = $this->cheapFlight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return airlineInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['airline_chinese_name'])) {
            $model->airlineChineseName = $map['airline_chinese_name'];
        }
        if (isset($map['airline_chinese_short_name'])) {
            $model->airlineChineseShortName = $map['airline_chinese_short_name'];
        }
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }
        if (isset($map['airline_icon'])) {
            $model->airlineIcon = $map['airline_icon'];
        }
        if (isset($map['cheap_flight'])) {
            $model->cheapFlight = $map['cheap_flight'];
        }

        return $model;
    }
}
