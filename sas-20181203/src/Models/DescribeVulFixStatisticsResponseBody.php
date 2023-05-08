<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulFixStatisticsResponseBody\fixStat;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulFixStatisticsResponseBody\fixTotal;
use AlibabaCloud\Tea\Model;

class DescribeVulFixStatisticsResponseBody extends Model
{
    /**
     * @var fixStat[]
     */
    public $fixStat;

    /**
     * @var fixTotal
     */
    public $fixTotal;

    /**
     * @example CE500770-42D3-442E-9DDD-156E0F9F3B45
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fixStat'   => 'FixStat',
        'fixTotal'  => 'FixTotal',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fixStat) {
            $res['FixStat'] = [];
            if (null !== $this->fixStat && \is_array($this->fixStat)) {
                $n = 0;
                foreach ($this->fixStat as $item) {
                    $res['FixStat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fixTotal) {
            $res['FixTotal'] = null !== $this->fixTotal ? $this->fixTotal->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulFixStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FixStat'])) {
            if (!empty($map['FixStat'])) {
                $model->fixStat = [];
                $n              = 0;
                foreach ($map['FixStat'] as $item) {
                    $model->fixStat[$n++] = null !== $item ? fixStat::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FixTotal'])) {
            $model->fixTotal = fixTotal::fromMap($map['FixTotal']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
