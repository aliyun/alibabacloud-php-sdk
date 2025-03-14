<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetCheckTimeDimensionStatisticRequest extends Model
{
    /**
     * @description End time, in timestamp format.
     *
     * @example 1672285044000
     *
     * @var int
     */
    public $endTimeStamp;

    /**
     * @description Start time, in timestamp format.
     *
     * @example 1672385044000
     *
     * @var int
     */
    public $startTimeStamp;

    /**
     * @description Type of statistical data. Values:
     * - **CheckPassRate**: Check item pass rate.
     * - **AssetPassRate**: Asset pass rate.
     *
     * @example AssetPassRate
     *
     * @var string
     */
    public $statisticType;

    /**
     * @description List of cloud vendors.
     *
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'endTimeStamp' => 'EndTimeStamp',
        'startTimeStamp' => 'StartTimeStamp',
        'statisticType' => 'StatisticType',
        'vendors' => 'Vendors',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }
        if (null !== $this->statisticType) {
            $res['StatisticType'] = $this->statisticType;
        }
        if (null !== $this->vendors) {
            $res['Vendors'] = $this->vendors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckTimeDimensionStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }
        if (isset($map['StatisticType'])) {
            $model->statisticType = $map['StatisticType'];
        }
        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = $map['Vendors'];
            }
        }

        return $model;
    }
}
