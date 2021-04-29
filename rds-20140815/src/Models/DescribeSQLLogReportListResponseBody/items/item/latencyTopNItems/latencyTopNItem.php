<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\latencyTopNItems;

use AlibabaCloud\Tea\Model;

class latencyTopNItem extends Model
{
    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $SQLExecuteTimes;

    /**
     * @var int
     */
    public $avgLatency;
    protected $_name = [
        'SQLText'         => 'SQLText',
        'SQLExecuteTimes' => 'SQLExecuteTimes',
        'avgLatency'      => 'AvgLatency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->SQLExecuteTimes) {
            $res['SQLExecuteTimes'] = $this->SQLExecuteTimes;
        }
        if (null !== $this->avgLatency) {
            $res['AvgLatency'] = $this->avgLatency;
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
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['SQLExecuteTimes'])) {
            $model->SQLExecuteTimes = $map['SQLExecuteTimes'];
        }
        if (isset($map['AvgLatency'])) {
            $model->avgLatency = $map['AvgLatency'];
        }

        return $model;
    }
}
