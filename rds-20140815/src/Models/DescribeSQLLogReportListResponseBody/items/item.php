<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\latencyTopNItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\QPSTopNItems;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var latencyTopNItems
     */
    public $latencyTopNItems;

    /**
     * @var QPSTopNItems
     */
    public $QPSTopNItems;

    /**
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
