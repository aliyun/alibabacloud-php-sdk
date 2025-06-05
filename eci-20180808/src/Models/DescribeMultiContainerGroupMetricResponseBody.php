<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas;

class DescribeMultiContainerGroupMetricResponseBody extends Model
{
    /**
     * @var monitorDatas[]
     */
    public $monitorDatas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorDatas' => 'MonitorDatas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->monitorDatas)) {
            Model::validateArray($this->monitorDatas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitorDatas) {
            if (\is_array($this->monitorDatas)) {
                $res['MonitorDatas'] = [];
                $n1 = 0;
                foreach ($this->monitorDatas as $item1) {
                    $res['MonitorDatas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MonitorDatas'])) {
            if (!empty($map['MonitorDatas'])) {
                $model->monitorDatas = [];
                $n1 = 0;
                foreach ($map['MonitorDatas'] as $item1) {
                    $model->monitorDatas[$n1++] = monitorDatas::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
