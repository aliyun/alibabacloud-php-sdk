<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

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

    /**
     * @var bool
     */
    public $viewAll;
    protected $_name = [
        'city' => 'City',
        'IPV4' => 'IPV4',
        'IPV6' => 'IPV6',
        'isp' => 'Isp',
        'regionId' => 'RegionId',
        'viewAll' => 'ViewAll',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
