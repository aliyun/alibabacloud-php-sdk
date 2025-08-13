<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskIPCity;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskIPProvince;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskMobileCity;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskMobileProvince;

class resultObject extends Model
{
    /**
     * @var highRiskIPCity
     */
    public $highRiskIPCity;

    /**
     * @var highRiskIPProvince
     */
    public $highRiskIPProvince;

    /**
     * @var highRiskMobileCity
     */
    public $highRiskMobileCity;

    /**
     * @var highRiskMobileProvince
     */
    public $highRiskMobileProvince;
    protected $_name = [
        'highRiskIPCity' => 'highRiskIPCity',
        'highRiskIPProvince' => 'highRiskIPProvince',
        'highRiskMobileCity' => 'highRiskMobileCity',
        'highRiskMobileProvince' => 'highRiskMobileProvince',
    ];

    public function validate()
    {
        if (null !== $this->highRiskIPCity) {
            $this->highRiskIPCity->validate();
        }
        if (null !== $this->highRiskIPProvince) {
            $this->highRiskIPProvince->validate();
        }
        if (null !== $this->highRiskMobileCity) {
            $this->highRiskMobileCity->validate();
        }
        if (null !== $this->highRiskMobileProvince) {
            $this->highRiskMobileProvince->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->highRiskIPCity) {
            $res['highRiskIPCity'] = null !== $this->highRiskIPCity ? $this->highRiskIPCity->toArray($noStream) : $this->highRiskIPCity;
        }

        if (null !== $this->highRiskIPProvince) {
            $res['highRiskIPProvince'] = null !== $this->highRiskIPProvince ? $this->highRiskIPProvince->toArray($noStream) : $this->highRiskIPProvince;
        }

        if (null !== $this->highRiskMobileCity) {
            $res['highRiskMobileCity'] = null !== $this->highRiskMobileCity ? $this->highRiskMobileCity->toArray($noStream) : $this->highRiskMobileCity;
        }

        if (null !== $this->highRiskMobileProvince) {
            $res['highRiskMobileProvince'] = null !== $this->highRiskMobileProvince ? $this->highRiskMobileProvince->toArray($noStream) : $this->highRiskMobileProvince;
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
        if (isset($map['highRiskIPCity'])) {
            $model->highRiskIPCity = highRiskIPCity::fromMap($map['highRiskIPCity']);
        }

        if (isset($map['highRiskIPProvince'])) {
            $model->highRiskIPProvince = highRiskIPProvince::fromMap($map['highRiskIPProvince']);
        }

        if (isset($map['highRiskMobileCity'])) {
            $model->highRiskMobileCity = highRiskMobileCity::fromMap($map['highRiskMobileCity']);
        }

        if (isset($map['highRiskMobileProvince'])) {
            $model->highRiskMobileProvince = highRiskMobileProvince::fromMap($map['highRiskMobileProvince']);
        }

        return $model;
    }
}
