<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\latencyTopNItems;

use AlibabaCloud\Tea\Model;

class latencyTopNItem extends Model
{
    /**
     * @var int
     */
    public $avgLatency;

    /**
     * @var int
     */
    public $SQLExecuteTimes;

    /**
     * @var string
     */
    public $SQLText;
    protected $_name = [
        'avgLatency'      => 'AvgLatency',
        'SQLExecuteTimes' => 'SQLExecuteTimes',
        'SQLText'         => 'SQLText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgLatency) {
            $res['AvgLatency'] = $this->avgLatency;
        }
        if (null !== $this->SQLExecuteTimes) {
            $res['SQLExecuteTimes'] = $this->SQLExecuteTimes;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return latencyTopNItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgLatency'])) {
            $model->avgLatency = $map['AvgLatency'];
        }
        if (isset($map['SQLExecuteTimes'])) {
            $model->SQLExecuteTimes = $map['SQLExecuteTimes'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }

        return $model;
    }
}
