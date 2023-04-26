<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryResponseBody\histories;
use AlibabaCloud\Tea\Model;

class GetAuditHistoryResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @var histories[]
     */
    public $histories;

    /**
     * @description The review comments, which are provided by the reviewer.
     *
     * @example 04F0F334-1335-43*****D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The reviewer.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The sorting rule of the results. Valid values:
     *
     *   **CreationTime:Desc**: sorts the results based on the creation time in descending order. This is the default value.
     *   **CreationTime:Asc**: sorts the results based on the creation time in ascending order.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'histories' => 'Histories',
        'requestId' => 'RequestId',
        'status'    => 'Status',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->histories) {
            $res['Histories'] = [];
            if (null !== $this->histories && \is_array($this->histories)) {
                $n = 0;
                foreach ($this->histories as $item) {
                    $res['Histories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuditHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Histories'])) {
            if (!empty($map['Histories'])) {
                $model->histories = [];
                $n                = 0;
                foreach ($map['Histories'] as $item) {
                    $model->histories[$n++] = null !== $item ? histories::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
