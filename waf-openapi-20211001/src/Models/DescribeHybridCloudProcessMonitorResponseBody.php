<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudProcessMonitorResponseBody\processMonitors;

class DescribeHybridCloudProcessMonitorResponseBody extends Model
{
    /**
     * @var processMonitors[]
     */
    public $processMonitors;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'processMonitors' => 'ProcessMonitors',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->processMonitors)) {
            Model::validateArray($this->processMonitors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processMonitors) {
            if (\is_array($this->processMonitors)) {
                $res['ProcessMonitors'] = [];
                $n1 = 0;
                foreach ($this->processMonitors as $item1) {
                    $res['ProcessMonitors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProcessMonitors'])) {
            if (!empty($map['ProcessMonitors'])) {
                $model->processMonitors = [];
                $n1 = 0;
                foreach ($map['ProcessMonitors'] as $item1) {
                    $model->processMonitors[$n1] = processMonitors::fromMap($item1);
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
