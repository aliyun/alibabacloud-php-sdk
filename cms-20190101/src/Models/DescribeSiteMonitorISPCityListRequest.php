<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorISPCityListRequest extends Model
{
    /**
     * @description The name or ID of the city.
     *
     * > City names support fuzzy match.
     * @var string
     */
    public $city;

    /**
     * @description Specifies whether to query IPv4 probes. Valid values:
     *
     *   true (default): IPv4 probes are queried.
     *   false: IPv4 probes are not queried.
     *
     * @example true
     *
     * @var bool
     */
    public $IPV4;

    /**
     * @description Specifies whether to query IPv6 probes. Valid values:
     *
     *   true (default): IPv6 probes are queried.
     *   false: IPv6 probes are not queried.
     *
     * @example true
     *
     * @var bool
     */
    public $IPV6;

    /**
     * @description The name or ID of the carrier.
     *
     * > Carrier names support fuzzy match.
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to return all detection points. Valid values:
     *
     *   true (default): returns all detection points.
     *   false: returns only available detection points.
     *
     * @example true
     *
     * @var bool
     */
    public $viewAll;
    protected $_name = [
        'city'     => 'City',
        'IPV4'     => 'IPV4',
        'IPV6'     => 'IPV6',
        'isp'      => 'Isp',
        'regionId' => 'RegionId',
        'viewAll'  => 'ViewAll',
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
        if (null !== $this->viewAll) {
            $res['ViewAll'] = $this->viewAll;
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
        if (isset($map['ViewAll'])) {
            $model->viewAll = $map['ViewAll'];
        }

        return $model;
    }
}
