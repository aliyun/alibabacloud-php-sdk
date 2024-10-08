<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\PutKvAccountResponseBody\namespaceList;
use AlibabaCloud\Tea\Model;

class PutKvAccountResponseBody extends Model
{
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
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
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
        'namespaceList'  => 'NamespaceList',
        'namespaceQuota' => 'NamespaceQuota',
        'namespaceUsed'  => 'NamespaceUsed',
        'requestId'      => 'RequestId',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return PutKvAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
