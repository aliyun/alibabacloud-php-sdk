<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFlowStatisticResponseBody\desktopFlowStatistic;
use AlibabaCloud\Tea\Model;

class DescribeFlowStatisticResponseBody extends Model
{
    /**
     * @var int
     */
    public $desktopCount;

    /**
     * @var desktopFlowStatistic[]
     */
    public $desktopFlowStatistic;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktopCount'         => 'DesktopCount',
        'desktopFlowStatistic' => 'DesktopFlowStatistic',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }
        if (null !== $this->desktopFlowStatistic) {
            $res['DesktopFlowStatistic'] = [];
            if (null !== $this->desktopFlowStatistic && \is_array($this->desktopFlowStatistic)) {
                $n = 0;
                foreach ($this->desktopFlowStatistic as $item) {
                    $res['DesktopFlowStatistic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowStatisticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }
        if (isset($map['DesktopFlowStatistic'])) {
            if (!empty($map['DesktopFlowStatistic'])) {
                $model->desktopFlowStatistic = [];
                $n                           = 0;
                foreach ($map['DesktopFlowStatistic'] as $item) {
                    $model->desktopFlowStatistic[$n++] = null !== $item ? desktopFlowStatistic::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
