<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRegionBlockResponseBody;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $regionBlockSwitch;

    /**
     * @var string[]
     */
    public $provinces;

    /**
     * @var string[]
     */
    public $countries;
    protected $_name = [
        'regionBlockSwitch' => 'RegionBlockSwitch',
        'provinces'         => 'Provinces',
        'countries'         => 'Countries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionBlockSwitch) {
            $res['RegionBlockSwitch'] = $this->regionBlockSwitch;
        }
        if (null !== $this->provinces) {
            $res['Provinces'] = $this->provinces;
        }
        if (null !== $this->countries) {
            $res['Countries'] = $this->countries;
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
        if (isset($map['RegionBlockSwitch'])) {
            $model->regionBlockSwitch = $map['RegionBlockSwitch'];
        }
        if (isset($map['Provinces'])) {
            if (!empty($map['Provinces'])) {
                $model->provinces = $map['Provinces'];
            }
        }
        if (isset($map['Countries'])) {
            if (!empty($map['Countries'])) {
                $model->countries = $map['Countries'];
            }
        }

        return $model;
    }
}
