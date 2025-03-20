<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvAccountResponseBody\namespaceList;
use AlibabaCloud\Tea\Model;

class GetKvAccountResponseBody extends Model
{
    /**
     * @description The available capacity of all namespaces in the account. Unit: bytes.
     *
     * @example 1073741824
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The available capacity of all namespaces in the account.
     *
     * @example 1 GB
     *
     * @var string
     */
    public $capacityString;

    /**
     * @description The used capacity of all namespaces in the account. Unit: bytes.
     *
     * @example 10048576
     *
     * @var int
     */
    public $capacityUsed;

    /**
     * @description The used capacity of all namespaces in the account.
     *
     * @example 100 MB
     *
     * @var string
     */
    public $capacityUsedString;

    /**
     * @description The namespaces in the account.
     *
     * @var namespaceList[]
     */
    public $namespaceList;

    /**
     * @description The maximum number of namespaces that can be created in the account.
     *
     * @example 10
     *
     * @var int
     */
    public $namespaceQuota;

    /**
     * @description The number of created namespaces that store key-value data in the account.
     *
     * @example 1
     *
     * @var int
     */
    public $namespaceUsed;

    /**
     * @description The request ID.
     *
     * @example EEEBE525-F576-1196-8DAF-2D70CA3F4D2F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether Edge KV is activated for the Alibaba Cloud account.
     *
     *   **online**
     *   **offline**
     *
     * @example online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'capacity' => 'Capacity',
        'capacityString' => 'CapacityString',
        'capacityUsed' => 'CapacityUsed',
        'capacityUsedString' => 'CapacityUsedString',
        'namespaceList' => 'NamespaceList',
        'namespaceQuota' => 'NamespaceQuota',
        'namespaceUsed' => 'NamespaceUsed',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->capacityString) {
            $res['CapacityString'] = $this->capacityString;
        }
        if (null !== $this->capacityUsed) {
            $res['CapacityUsed'] = $this->capacityUsed;
        }
        if (null !== $this->capacityUsedString) {
            $res['CapacityUsedString'] = $this->capacityUsedString;
        }
        if (null !== $this->namespaceList) {
            $res['NamespaceList'] = [];
            if (null !== $this->namespaceList && \is_array($this->namespaceList)) {
                $n = 0;
                foreach ($this->namespaceList as $item) {
                    $res['NamespaceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->namespaceQuota) {
            $res['NamespaceQuota'] = $this->namespaceQuota;
        }
        if (null !== $this->namespaceUsed) {
            $res['NamespaceUsed'] = $this->namespaceUsed;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKvAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['CapacityString'])) {
            $model->capacityString = $map['CapacityString'];
        }
        if (isset($map['CapacityUsed'])) {
            $model->capacityUsed = $map['CapacityUsed'];
        }
        if (isset($map['CapacityUsedString'])) {
            $model->capacityUsedString = $map['CapacityUsedString'];
        }
        if (isset($map['NamespaceList'])) {
            if (!empty($map['NamespaceList'])) {
                $model->namespaceList = [];
                $n = 0;
                foreach ($map['NamespaceList'] as $item) {
                    $model->namespaceList[$n++] = null !== $item ? namespaceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NamespaceQuota'])) {
            $model->namespaceQuota = $map['NamespaceQuota'];
        }
        if (isset($map['NamespaceUsed'])) {
            $model->namespaceUsed = $map['NamespaceUsed'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
