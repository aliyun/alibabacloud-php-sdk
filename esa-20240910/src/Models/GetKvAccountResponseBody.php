<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvAccountResponseBody\namespaceList;
use AlibabaCloud\Tea\Model;

class GetKvAccountResponseBody extends Model
{
    /**
     * @example 1073741824
     *
     * @var int
     */
    public $capacity;

    /**
     * @example 1 GB
     *
     * @var string
     */
    public $capacityString;

    /**
     * @example 10048576
     *
     * @var int
     */
    public $capacityUsed;

    /**
     * @example 100 MB
     *
     * @var string
     */
    public $capacityUsedString;

    /**
     * @var namespaceList[]
     */
    public $namespaceList;

    /**
     * @example 10
     *
     * @var int
     */
    public $namespaceQuota;

    /**
     * @example 1
     *
     * @var int
     */
    public $namespaceUsed;

    /**
     * @example EEEBE525-F576-1196-8DAF-2D70CA3F4D2F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'capacity'           => 'Capacity',
        'capacityString'     => 'CapacityString',
        'capacityUsed'       => 'CapacityUsed',
        'capacityUsedString' => 'CapacityUsedString',
        'namespaceList'      => 'NamespaceList',
        'namespaceQuota'     => 'NamespaceQuota',
        'namespaceUsed'      => 'NamespaceUsed',
        'requestId'          => 'RequestId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

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
                $n                    = 0;
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
