<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaIpCityResponseBody;

use AlibabaCloud\Tea\Model;

class captchaCities extends Model
{
    /**
     * @var int
     */
    public $pv;

    /**
     * @var string
     */
    public $lng;

    /**
     * @var string
     */
    public $lat;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'pv'       => 'Pv',
        'lng'      => 'Lng',
        'lat'      => 'Lat',
        'location' => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }
        if (null !== $this->lng) {
            $res['Lng'] = $this->lng;
        }
        if (null !== $this->lat) {
            $res['Lat'] = $this->lat;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return captchaCities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }
        if (isset($map['Lng'])) {
            $model->lng = $map['Lng'];
        }
        if (isset($map['Lat'])) {
            $model->lat = $map['Lat'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
