<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListMonitorDataResponseBody\monitorData;
use AlibabaCloud\Tea\Model;

class ListMonitorDataResponseBody extends Model
{
    /**
     * @var monitorData[]
     */
    public $monitorData;

    /**
     * @example 15292160-382F-46F2-B241-95EFB54BA434
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorData' => 'MonitorData',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorData) {
            $res['MonitorData'] = [];
            if (null !== $this->monitorData && \is_array($this->monitorData)) {
                $n = 0;
                foreach ($this->monitorData as $item) {
                    $res['MonitorData'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListMonitorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorData'])) {
            if (!empty($map['MonitorData'])) {
                $model->monitorData = [];
                $n                  = 0;
                foreach ($map['MonitorData'] as $item) {
                    $model->monitorData[$n++] = null !== $item ? monitorData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
