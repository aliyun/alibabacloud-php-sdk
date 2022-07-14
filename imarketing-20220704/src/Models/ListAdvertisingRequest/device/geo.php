<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest\device;

use AlibabaCloud\Tea\Model;

class geo extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $district;

    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lon;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'city'     => 'City',
        'district' => 'District',
        'lat'      => 'Lat',
        'lon'      => 'Lon',
        'province' => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->district) {
            $res['District'] = $this->district;
        }
        if (null !== $this->lat) {
            $res['Lat'] = $this->lat;
        }
        if (null !== $this->lon) {
            $res['Lon'] = $this->lon;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return geo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['District'])) {
            $model->district = $map['District'];
        }
        if (isset($map['Lat'])) {
            $model->lat = $map['Lat'];
        }
        if (isset($map['Lon'])) {
            $model->lon = $map['Lon'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
