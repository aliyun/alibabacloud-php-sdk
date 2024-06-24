<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRegionBlockResponseBody;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description An array consisting of the codes of the countries or areas from which the requests are blocked.
     *
     * @var int[]
     */
    public $countries;

    /**
     * @description An array consisting of the codes of the administrative regions in China from which the requests are blocked.
     *
     * @var int[]
     */
    public $provinces;

    /**
     * @description The status of the Location Blacklist policy. Valid values:
     *
     *   **on**: enabled
     *   **off**: disabled
     *
     * @example on
     *
     * @var string
     */
    public $regionBlockSwitch;
    protected $_name = [
        'countries'         => 'Countries',
        'provinces'         => 'Provinces',
        'regionBlockSwitch' => 'RegionBlockSwitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countries) {
            $res['Countries'] = $this->countries;
        }
        if (null !== $this->provinces) {
            $res['Provinces'] = $this->provinces;
        }
        if (null !== $this->regionBlockSwitch) {
            $res['RegionBlockSwitch'] = $this->regionBlockSwitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Countries'])) {
            if (!empty($map['Countries'])) {
                $model->countries = $map['Countries'];
            }
        }
        if (isset($map['Provinces'])) {
            if (!empty($map['Provinces'])) {
                $model->provinces = $map['Provinces'];
            }
        }
        if (isset($map['RegionBlockSwitch'])) {
            $model->regionBlockSwitch = $map['RegionBlockSwitch'];
        }

        return $model;
    }
}
