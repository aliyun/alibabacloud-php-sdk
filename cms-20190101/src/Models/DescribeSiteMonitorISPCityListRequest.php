<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorISPCityListRequest extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var bool
     */
    public $IPV4;

    /**
     * @var bool
     */
    public $IPV6;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'city'     => 'City',
        'IPV4'     => 'IPV4',
        'IPV6'     => 'IPV6',
        'isp'      => 'Isp',
        'regionId' => 'RegionId',
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
        if (null !== $this->IPV4) {
            $res['IPV4'] = $this->IPV4;
        }
        if (null !== $this->IPV6) {
            $res['IPV6'] = $this->IPV6;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorISPCityListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['IPV4'])) {
            $model->IPV4 = $map['IPV4'];
        }
        if (isset($map['IPV6'])) {
            $model->IPV6 = $map['IPV6'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
