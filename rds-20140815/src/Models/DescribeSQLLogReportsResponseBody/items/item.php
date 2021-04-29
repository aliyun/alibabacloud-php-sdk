<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportsResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportsResponseBody\items\item\latencyTopNItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportsResponseBody\items\item\QPSTopNItems;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var QPSTopNItems
     */
    public $QPSTopNItems;

    /**
     * @var string
     */
    public $reportTime;

    /**
     * @var latencyTopNItems
     */
    public $latencyTopNItems;
    protected $_name = [
        'QPSTopNItems'     => 'QPSTopNItems',
        'reportTime'       => 'ReportTime',
        'latencyTopNItems' => 'LatencyTopNItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->QPSTopNItems) {
            $res['QPSTopNItems'] = null !== $this->QPSTopNItems ? $this->QPSTopNItems->toMap() : null;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }
        if (null !== $this->latencyTopNItems) {
            $res['LatencyTopNItems'] = null !== $this->latencyTopNItems ? $this->latencyTopNItems->toMap() : null;
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
        if (isset($map['QPSTopNItems'])) {
            $model->QPSTopNItems = QPSTopNItems::fromMap($map['QPSTopNItems']);
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }
        if (isset($map['LatencyTopNItems'])) {
            $model->latencyTopNItems = latencyTopNItems::fromMap($map['LatencyTopNItems']);
        }

        return $model;
    }
}
