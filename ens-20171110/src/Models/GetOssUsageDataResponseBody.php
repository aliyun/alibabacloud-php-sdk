<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssUsageDataResponseBody\usageList;
use AlibabaCloud\Tea\Model;

class GetOssUsageDataResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 2A8CCD48-14F9-0309-B957-7B1D74A8119D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The array of usage data.
     *
     * @var usageList[]
     */
    public $usageList;
    protected $_name = [
        'requestId' => 'RequestId',
        'usageList' => 'UsageList',
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
        if (null !== $this->usageList) {
            $res['UsageList'] = [];
            if (null !== $this->usageList && \is_array($this->usageList)) {
                $n = 0;
                foreach ($this->usageList as $item) {
                    $res['UsageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsageList'])) {
            if (!empty($map['UsageList'])) {
                $model->usageList = [];
                $n                = 0;
                foreach ($map['UsageList'] as $item) {
                    $model->usageList[$n++] = null !== $item ? usageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
