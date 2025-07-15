<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserBillPredictionResponseBody\billPredictionData;

use AlibabaCloud\Tea\Model;

class billPredictionDataItem extends Model
{
    /**
     * @description The billable region. Valid values:
     *
     *   CN: Chinese mainland
     *   OverSeas: countries and regions outside the Chinese mainland
     *   AP1: Asia Pacific 1, including Hong Kong (China), Macao (China), Taiwan (China), Japan, and other Southeast Asia countries and regions except Vietnam and Indonesia
     *   AP2: Asia Pacific 2, including Indonesia, South Korea, and Vietnam
     *   AP3: Asia Pacific 3, including Australia and New Zealand
     *   NA: North America, including US and Canada
     *   SA: South America, specifically meaning Brazil
     *   EU: Europe, including Ukraine, UK, France, Netherlands, Spain, Italy, Sweden, and Germany
     *   MEAA: Middle East and Africa, including South Africa, Oman, UAE, and Kuwait
     *
     * By default, data of all regions is aggregated and returned.
     *
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The time at which the estimated value occurs. This parameter is returned only if the metering method is pay by 95th percentile bandwidth, pay by 95th percentile bandwidth with 50% off from 00:00 to 08:00, or pay by 4th peak bandwidth per month.
     *
     * @example 2018-10-15T16:00:00Z
     *
     * @var string
     */
    public $timeStp;

    /**
     * @description The estimated value.
     *
     * @example 10000
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'area' => 'Area',
        'timeStp' => 'TimeStp',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->timeStp) {
            $res['TimeStp'] = $this->timeStp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billPredictionDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['TimeStp'])) {
            $model->timeStp = $map['TimeStp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
