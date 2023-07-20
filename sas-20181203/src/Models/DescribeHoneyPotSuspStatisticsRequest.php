<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeHoneyPotSuspStatisticsRequest extends Model
{
    /**
     * @description The source of the request. Set the value to **honeypot**.
     *
     * @example honeypot
     *
     * @var string
     */
    public $from;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The time range of the data to query. Unit: days.
     *
     * @example 30
     *
     * @var int
     */
    public $statisticsDays;

    /**
     * @description The type of the asset to query. Valid values:
     *
     *   **vpcInstanceId**: VPC
     *   **uuid**: server
     *
     * @example vpcInstanceId
     *
     * @var string
     */
    public $statisticsKeyType;
    protected $_name = [
        'from'              => 'From',
        'lang'              => 'Lang',
        'statisticsDays'    => 'StatisticsDays',
        'statisticsKeyType' => 'StatisticsKeyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->statisticsDays) {
            $res['StatisticsDays'] = $this->statisticsDays;
        }
        if (null !== $this->statisticsKeyType) {
            $res['StatisticsKeyType'] = $this->statisticsKeyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHoneyPotSuspStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StatisticsDays'])) {
            $model->statisticsDays = $map['StatisticsDays'];
        }
        if (isset($map['StatisticsKeyType'])) {
            $model->statisticsKeyType = $map['StatisticsKeyType'];
        }

        return $model;
    }
}
