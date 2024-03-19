<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList;

use AlibabaCloud\Tea\Model;

class operatingAirlineInfo extends Model
{
    /**
     * @example MU
     *
     * @var string
     */
    public $airlineCode;

    /**
     * @var string
     */
    public $airlineName;

    /**
     * @var string
     */
    public $allianceName;

    /**
     * @example false
     *
     * @var bool
     */
    public $cheapAirline;

    /**
     * @example https://gw.alicdn.com/tfs/TB15EXDFHY1gK0jSZTEXXXDQVXa-450-450.png
     *
     * @var string
     */
    public $iconUrl;

    /**
     * @example https://gw.alicdn.com/tfs/TB15EXDFHY1gK0jSZTEXXXDQVXa-450-450.png
     *
     * @var string
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $shortName;
    protected $_name = [
        'airlineCode'  => 'airline_code',
        'airlineName'  => 'airline_name',
        'allianceName' => 'alliance_name',
        'cheapAirline' => 'cheap_airline',
        'iconUrl'      => 'icon_url',
        'logoUrl'      => 'logo_url',
        'shortName'    => 'short_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }
        if (null !== $this->airlineName) {
            $res['airline_name'] = $this->airlineName;
        }
        if (null !== $this->allianceName) {
            $res['alliance_name'] = $this->allianceName;
        }
        if (null !== $this->cheapAirline) {
            $res['cheap_airline'] = $this->cheapAirline;
        }
        if (null !== $this->iconUrl) {
            $res['icon_url'] = $this->iconUrl;
        }
        if (null !== $this->logoUrl) {
            $res['logo_url'] = $this->logoUrl;
        }
        if (null !== $this->shortName) {
            $res['short_name'] = $this->shortName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operatingAirlineInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }
        if (isset($map['airline_name'])) {
            $model->airlineName = $map['airline_name'];
        }
        if (isset($map['alliance_name'])) {
            $model->allianceName = $map['alliance_name'];
        }
        if (isset($map['cheap_airline'])) {
            $model->cheapAirline = $map['cheap_airline'];
        }
        if (isset($map['icon_url'])) {
            $model->iconUrl = $map['icon_url'];
        }
        if (isset($map['logo_url'])) {
            $model->logoUrl = $map['logo_url'];
        }
        if (isset($map['short_name'])) {
            $model->shortName = $map['short_name'];
        }

        return $model;
    }
}
