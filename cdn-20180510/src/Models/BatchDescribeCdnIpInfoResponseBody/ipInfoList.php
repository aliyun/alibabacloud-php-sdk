<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\BatchDescribeCdnIpInfoResponseBody;

use AlibabaCloud\Dara\Model;

class ipInfoList extends Model
{
    /**
     * @var string
     */
    public $cdnIp;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'cdnIp' => 'CdnIp',
        'city' => 'City',
        'country' => 'Country',
        'ipAddress' => 'IpAddress',
        'ispName' => 'IspName',
        'province' => 'Province',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
