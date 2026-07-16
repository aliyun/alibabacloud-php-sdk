<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopListSearchResponseBody\module\reShopItemList\flightJourneyInfos\flightSegmentInfos;

use AlibabaCloud\Dara\Model;

class airlineInfo extends Model
{
    /**
     * @var string
     */
    public $airlineCode;

    /**
     * @var string
     */
    public $airlineName;

    /**
     * @var bool
     */
    public $cheapAirline;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var string
     */
    public $shortName;
    protected $_name = [
        'airlineCode' => 'airline_code',
        'airlineName' => 'airline_name',
        'cheapAirline' => 'cheap_airline',
        'iconUrl' => 'icon_url',
        'shortName' => 'short_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }

        if (null !== $this->airlineName) {
            $res['airline_name'] = $this->airlineName;
        }

        if (null !== $this->cheapAirline) {
            $res['cheap_airline'] = $this->cheapAirline;
        }

        if (null !== $this->iconUrl) {
            $res['icon_url'] = $this->iconUrl;
        }

        if (null !== $this->shortName) {
            $res['short_name'] = $this->shortName;
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
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }

        if (isset($map['airline_name'])) {
            $model->airlineName = $map['airline_name'];
        }

        if (isset($map['cheap_airline'])) {
            $model->cheapAirline = $map['cheap_airline'];
        }

        if (isset($map['icon_url'])) {
            $model->iconUrl = $map['icon_url'];
        }

        if (isset($map['short_name'])) {
            $model->shortName = $map['short_name'];
        }

        return $model;
    }
}
