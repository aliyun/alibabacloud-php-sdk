<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetSchedulerInfoResponseBody\schedInfo;
use AlibabaCloud\Tea\Model;

class GetSchedulerInfoResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example BBC2F93D-003A-49C4-850C-B826EECF****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The settings of the scheduler.
     *
     * @var schedInfo[]
     */
    public $schedInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'schedInfo' => 'SchedInfo',
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
        if (null !== $this->schedInfo) {
            $res['SchedInfo'] = [];
            if (null !== $this->schedInfo && \is_array($this->schedInfo)) {
                $n = 0;
                foreach ($this->schedInfo as $item) {
                    $res['SchedInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSchedulerInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SchedInfo'])) {
            if (!empty($map['SchedInfo'])) {
                $model->schedInfo = [];
                $n                = 0;
                foreach ($map['SchedInfo'] as $item) {
                    $model->schedInfo[$n++] = null !== $item ? schedInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
