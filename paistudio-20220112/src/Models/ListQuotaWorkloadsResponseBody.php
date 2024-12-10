<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListQuotaWorkloadsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 42F23B58-3684-5443-848A-8DA81FF99712
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 23
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var QueueInfo[]
     */
    public $workloads;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'workloads'  => 'Workloads',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->workloads) {
            $res['Workloads'] = [];
            if (null !== $this->workloads && \is_array($this->workloads)) {
                $n = 0;
                foreach ($this->workloads as $item) {
                    $res['Workloads'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotaWorkloadsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Workloads'])) {
            if (!empty($map['Workloads'])) {
                $model->workloads = [];
                $n                = 0;
                foreach ($map['Workloads'] as $item) {
                    $model->workloads[$n++] = null !== $item ? QueueInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
