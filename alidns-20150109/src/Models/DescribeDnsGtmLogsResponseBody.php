<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmLogsResponseBody\logs;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmLogsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $totalPages;

    /**
     * @var logs[]
     */
    public $logs;

    /**
     * @var int
     */
    public $totalItems;
    protected $_name = [
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'pageNumber' => 'PageNumber',
        'totalPages' => 'TotalPages',
        'logs'       => 'Logs',
        'totalItems' => 'TotalItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->logs) {
            $res['Logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['Logs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n           = 0;
                foreach ($map['Logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? logs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }

        return $model;
    }
}
