<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\transferFlightList\flightShareInfo;

use AlibabaCloud\Dara\Model;

class operatingAirlineInfo extends Model
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
     * @var string
     */
    public $airlineCode;

    /**
     * @var string
     */
    public $airlineIcon;

    /**
     * @var bool
     */
    public $cheapFlight;
    protected $_name = [
        'airlineChineseName' => 'airline_chinese_name',
        'airlineChineseShortName' => 'airline_chinese_short_name',
        'airlineCode' => 'airline_code',
        'airlineIcon' => 'airline_icon',
        'cheapFlight' => 'cheap_flight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
