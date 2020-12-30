<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryResponseBody\histories;
use AlibabaCloud\Tea\Model;

class GetAuditHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var histories[]
     */
    public $histories;
    protected $_name = [
        'status'    => 'Status',
        'requestId' => 'RequestId',
        'total'     => 'Total',
        'histories' => 'Histories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->histories) {
            $res['Histories'] = [];
            if (null !== $this->histories && \is_array($this->histories)) {
                $n = 0;
                foreach ($this->histories as $item) {
                    $res['Histories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Histories'])) {
            if (!empty($map['Histories'])) {
                $model->histories = [];
                $n                = 0;
                foreach ($map['Histories'] as $item) {
                    $model->histories[$n++] = null !== $item ? histories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
