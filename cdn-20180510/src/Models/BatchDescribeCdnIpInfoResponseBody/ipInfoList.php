<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\BatchDescribeCdnIpInfoResponseBody;

use AlibabaCloud\Tea\Model;

class ipInfoList extends Model
{
    /**
     * @description Indicates whether the IP address belongs to an Alibaba Cloud CDN point of presence (POP).
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $cdnIp;

    /**
     * @description The city to which the IP address belongs.
     *
     * @example Beijing
     *
     * @var string
     */
    public $city;

    /**
     * @description The country to which the IP address belongs.
     *
     * @example China
     *
     * @var string
     */
    public $country;

    /**
     * @description The IP address of the client.
     *
     * @example 111.XXX.XXX.230
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The ISP to which the IP address belongs.
     *
     * @example Move
     *
     * @var string
     */
    public $ispName;

    /**
     * @description The province to which the IP address belongs.
     *
     * @example Beijing
     *
     * @var string
     */
    public $province;
    protected $_name = [
        'cdnIp'     => 'CdnIp',
        'city'      => 'City',
        'country'   => 'Country',
        'ipAddress' => 'IpAddress',
        'ispName'   => 'IspName',
        'province'  => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnIp) {
            $res['CdnIp'] = $this->cdnIp;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnIp'])) {
            $model->cdnIp = $map['CdnIp'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
