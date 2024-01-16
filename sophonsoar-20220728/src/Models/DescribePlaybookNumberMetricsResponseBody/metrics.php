<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNumberMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description The number of enabled playbooks.
     *
     * @example 50
     *
     * @var int
     */
    public $startUpNum;

    /**
     * @description The total number of playbooks.
     *
     * @example 100
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'startUpNum' => 'StartUpNum',
        'totalNum'   => 'TotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startUpNum) {
            $res['StartUpNum'] = $this->startUpNum;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartUpNum'])) {
            $model->startUpNum = $map['StartUpNum'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
