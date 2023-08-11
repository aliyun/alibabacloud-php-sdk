<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\flightJourneyInfos\flightSegmentInfos;

use AlibabaCloud\Tea\Model;

class depAirportInfo extends Model
{
    /**
     * @example HGH
     *
     * @var string
     */
    public $airportCode;

    /**
     * @var string
     */
    public $airportName;

    /**
     * @example #FF7300
     *
     * @var string
     */
    public $airportNameColor;

    /**
     * @var string
     */
    public $airportShortName;

    /**
     * @example T3
     *
     * @var string
     */
    public $terminal;
    protected $_name = [
        'airportCode'      => 'airport_code',
        'airportName'      => 'airport_name',
        'airportNameColor' => 'airport_name_color',
        'airportShortName' => 'airport_short_name',
        'terminal'         => 'terminal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airportCode) {
            $res['airport_code'] = $this->airportCode;
        }
        if (null !== $this->airportName) {
            $res['airport_name'] = $this->airportName;
        }
        if (null !== $this->airportNameColor) {
            $res['airport_name_color'] = $this->airportNameColor;
        }
        if (null !== $this->airportShortName) {
            $res['airport_short_name'] = $this->airportShortName;
        }
        if (null !== $this->terminal) {
            $res['terminal'] = $this->terminal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return depAirportInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['airport_code'])) {
            $model->airportCode = $map['airport_code'];
        }
        if (isset($map['airport_name'])) {
            $model->airportName = $map['airport_name'];
        }
        if (isset($map['airport_name_color'])) {
            $model->airportNameColor = $map['airport_name_color'];
        }
        if (isset($map['airport_short_name'])) {
            $model->airportShortName = $map['airport_short_name'];
        }
        if (isset($map['terminal'])) {
            $model->terminal = $map['terminal'];
        }

        return $model;
    }
}
