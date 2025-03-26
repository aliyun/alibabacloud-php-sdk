<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\latencyTopNItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\QPSTopNItems;

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
        'QPSTopNItems' => 'QPSTopNItems',
        'reportTime' => 'ReportTime',
    ];

    public function validate()
    {
        if (null !== $this->latencyTopNItems) {
            $this->latencyTopNItems->validate();
        }
        if (null !== $this->QPSTopNItems) {
            $this->QPSTopNItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latencyTopNItems) {
            $res['LatencyTopNItems'] = null !== $this->latencyTopNItems ? $this->latencyTopNItems->toArray($noStream) : $this->latencyTopNItems;
        }

        if (null !== $this->QPSTopNItems) {
            $res['QPSTopNItems'] = null !== $this->QPSTopNItems ? $this->QPSTopNItems->toArray($noStream) : $this->QPSTopNItems;
        }

        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
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
