<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\latencyTopNItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\QPSTopNItems;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description An array that consists of SQL statements executed with the highest latency.
     *
     * @var latencyTopNItems
     */
    public $latencyTopNItems;

    /**
     * @description An array that consists of SQL statements executed the most frequently.
     *
     * @var QPSTopNItems
     */
    public $QPSTopNItems;

    /**
     * @description The time when the report was generated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-03-27T16:00:00Z
     *
     * @var string
     */
    public $reportTime;
    protected $_name = [
        'latencyTopNItems' => 'LatencyTopNItems',
        'QPSTopNItems'     => 'QPSTopNItems',
        'reportTime'       => 'ReportTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latencyTopNItems) {
            $res['LatencyTopNItems'] = null !== $this->latencyTopNItems ? $this->latencyTopNItems->toMap() : null;
        }
        if (null !== $this->QPSTopNItems) {
            $res['QPSTopNItems'] = null !== $this->QPSTopNItems ? $this->QPSTopNItems->toMap() : null;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LatencyTopNItems'])) {
            $model->latencyTopNItems = latencyTopNItems::fromMap($map['LatencyTopNItems']);
        }
        if (isset($map['QPSTopNItems'])) {
            $model->QPSTopNItems = QPSTopNItems::fromMap($map['QPSTopNItems']);
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }

        return $model;
    }
}
