<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageGatewayResponseBody\storageGateways;
use AlibabaCloud\Tea\Model;

class DescribeStorageGatewayResponseBody extends Model
{
    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Id of the request
     *
     * @example 6666C5A5-75ED-422E-A022-7121FA18C968
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list information.
     *
     * @var storageGateways[]
     */
    public $storageGateways;

    /**
     * @description The total number of entries returned.
     *
     * @example 16
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'storageGateways' => 'StorageGateways',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->storageGateways) {
            $res['StorageGateways'] = [];
            if (null !== $this->storageGateways && \is_array($this->storageGateways)) {
                $n = 0;
                foreach ($this->storageGateways as $item) {
                    $res['StorageGateways'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStorageGatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageGateways'])) {
            if (!empty($map['StorageGateways'])) {
                $model->storageGateways = [];
                $n = 0;
                foreach ($map['StorageGateways'] as $item) {
                    $model->storageGateways[$n++] = null !== $item ? storageGateways::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
