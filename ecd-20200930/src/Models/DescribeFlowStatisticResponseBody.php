<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFlowStatisticResponseBody\desktopFlowStatistic;

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
        'desktopCount' => 'DesktopCount',
        'desktopFlowStatistic' => 'DesktopFlowStatistic',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopFlowStatistic)) {
            Model::validateArray($this->desktopFlowStatistic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }

        if (null !== $this->desktopFlowStatistic) {
            if (\is_array($this->desktopFlowStatistic)) {
                $res['DesktopFlowStatistic'] = [];
                $n1 = 0;
                foreach ($this->desktopFlowStatistic as $item1) {
                    $res['DesktopFlowStatistic'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }

        if (isset($map['DesktopFlowStatistic'])) {
            if (!empty($map['DesktopFlowStatistic'])) {
                $model->desktopFlowStatistic = [];
                $n1 = 0;
                foreach ($map['DesktopFlowStatistic'] as $item1) {
                    $model->desktopFlowStatistic[$n1++] = desktopFlowStatistic::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
