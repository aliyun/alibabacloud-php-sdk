<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskMonitorDataListResponseBody\monitorData;
use AlibabaCloud\Tea\Model;

class DescribeDiskMonitorDataListResponseBody extends Model
{
    /**
     * @var monitorData[]
     */
    public $monitorData;

    /**
     * @example e71d8a535bd9c****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'monitorData' => 'MonitorData',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskMonitorDataListResponseBody
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
