<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskIPCity;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskIPProvince;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskMobileCity;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskMobileProvince;
use AlibabaCloud\Tea\Model;

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
        'highRiskIPCity'         => 'highRiskIPCity',
        'highRiskIPProvince'     => 'highRiskIPProvince',
        'highRiskMobileCity'     => 'highRiskMobileCity',
        'highRiskMobileProvince' => 'highRiskMobileProvince',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->highRiskIPCity) {
            $res['highRiskIPCity'] = null !== $this->highRiskIPCity ? $this->highRiskIPCity->toMap() : null;
        }
        if (null !== $this->highRiskIPProvince) {
            $res['highRiskIPProvince'] = null !== $this->highRiskIPProvince ? $this->highRiskIPProvince->toMap() : null;
        }
        if (null !== $this->highRiskMobileCity) {
            $res['highRiskMobileCity'] = null !== $this->highRiskMobileCity ? $this->highRiskMobileCity->toMap() : null;
        }
        if (null !== $this->highRiskMobileProvince) {
            $res['highRiskMobileProvince'] = null !== $this->highRiskMobileProvince ? $this->highRiskMobileProvince->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
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
