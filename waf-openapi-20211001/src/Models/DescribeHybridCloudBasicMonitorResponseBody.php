<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudBasicMonitorResponseBody\basicMonitors;

class DescribeHybridCloudBasicMonitorResponseBody extends Model
{
    /**
     * @var basicMonitors[]
     */
    public $basicMonitors;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'basicMonitors' => 'BasicMonitors',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->basicMonitors)) {
            Model::validateArray($this->basicMonitors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicMonitors) {
            if (\is_array($this->basicMonitors)) {
                $res['BasicMonitors'] = [];
                $n1 = 0;
                foreach ($this->basicMonitors as $item1) {
                    $res['BasicMonitors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BasicMonitors'])) {
            if (!empty($map['BasicMonitors'])) {
                $model->basicMonitors = [];
                $n1 = 0;
                foreach ($map['BasicMonitors'] as $item1) {
                    $model->basicMonitors[$n1] = basicMonitors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
