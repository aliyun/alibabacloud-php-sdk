<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnKvAccountResponseBody\namespaceList;
use AlibabaCloud\Tea\Model;

class DescribeDcdnKvAccountResponseBody extends Model
{
    /**
     * @var string
     */
    public $capacityString;

    /**
     * @var string
     */
    public $capacityUsedString;

    /**
     * @description Details about the namespaces.
     *
     * @var namespaceList[]
     */
    public $namespaceList;

    /**
     * @description The maximum number of namespaces that you can apply for by using your account.
     *
     * @example 10
     *
     * @var int
     */
    public $namespaceQuota;

    /**
     * @description The number of namespaces that you applied for by using your account.
     *
     * @example 1
     *
     * @var int
     */
    public $namespaceUsed;

    /**
     * @description The ID of the request.
     *
     * @example D61E4801-EAFF-4A63-AAE1-FBF6CE1CFD1C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the account.
     *
     *   **online**: enabled
     *   **offline**: disabled
     *
     * @example online,offline
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'capacityString'     => 'CapacityString',
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
        if (null !== $this->capacityString) {
            $res['CapacityString'] = $this->capacityString;
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
     * @return DescribeDcdnKvAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityString'])) {
            $model->capacityString = $map['CapacityString'];
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
