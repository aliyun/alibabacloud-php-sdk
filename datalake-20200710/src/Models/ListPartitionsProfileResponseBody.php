<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListPartitionsProfileResponseBody extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $code;

    /**
     * @var PartitionProfile[]
     */
    public $data;

    /**
     * @example -
     *
     * @var string
     */
    public $latestAccessNumDate;

    /**
     * @example 2023-08-30 19:16:10
     *
     * @var string
     */
    public $latestDate;

    /**
     * @example -
     *
     * @var string
     */
    public $message;

    /**
     * @example 97434FA4-A6B2-1AE4-A174-76964F29C759
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'                => 'Code',
        'data'                => 'Data',
        'latestAccessNumDate' => 'LatestAccessNumDate',
        'latestDate'          => 'LatestDate',
        'message'             => 'Message',
        'requestId'           => 'RequestId',
        'success'             => 'Success',
        'total'               => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestAccessNumDate) {
            $res['LatestAccessNumDate'] = $this->latestAccessNumDate;
        }
        if (null !== $this->latestDate) {
            $res['LatestDate'] = $this->latestDate;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPartitionsProfileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? PartitionProfile::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LatestAccessNumDate'])) {
            $model->latestAccessNumDate = $map['LatestAccessNumDate'];
        }
        if (isset($map['LatestDate'])) {
            $model->latestDate = $map['LatestDate'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
