<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNewProjectEipMonitorDataResponseBody\eipMonitorDatas;
use AlibabaCloud\Tea\Model;

class DescribeNewProjectEipMonitorDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var eipMonitorDatas[]
     */
    public $eipMonitorDatas;
    protected $_name = [
        'requestId'       => 'RequestId',
        'eipMonitorDatas' => 'EipMonitorDatas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eipMonitorDatas) {
            $res['EipMonitorDatas'] = [];
            if (null !== $this->eipMonitorDatas && \is_array($this->eipMonitorDatas)) {
                $n = 0;
                foreach ($this->eipMonitorDatas as $item) {
                    $res['EipMonitorDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNewProjectEipMonitorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EipMonitorDatas'])) {
            if (!empty($map['EipMonitorDatas'])) {
                $model->eipMonitorDatas = [];
                $n                      = 0;
                foreach ($map['EipMonitorDatas'] as $item) {
                    $model->eipMonitorDatas[$n++] = null !== $item ? eipMonitorDatas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
