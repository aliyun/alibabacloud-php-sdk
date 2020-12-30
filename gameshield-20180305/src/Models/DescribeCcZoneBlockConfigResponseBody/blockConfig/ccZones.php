<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcZoneBlockConfigResponseBody\blockConfig;

use AlibabaCloud\Tea\Model;

class ccZones extends Model
{
    /**
     * @var string[]
     */
    public $provinces;

    /**
     * @var string
     */
    public $country;
    protected $_name = [
        'provinces' => 'Provinces',
        'country'   => 'Country',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->provinces) {
            $res['Provinces'] = $this->provinces;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ccZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Provinces'])) {
            if (!empty($map['Provinces'])) {
                $model->provinces = $map['Provinces'];
            }
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        return $model;
    }
}
