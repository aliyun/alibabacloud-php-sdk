<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\CopySnapshotResponseBody\allocationId;
use AlibabaCloud\SDK\Ens\V20171110\Models\CopySnapshotResponseBody\unAllocationId;
use AlibabaCloud\Tea\Model;

class CopySnapshotResponseBody extends Model
{
    /**
     * @description The list of created snapshots.
     *
     * @var allocationId[]
     */
    public $allocationId;

    /**
     * @description Success status code.
     *
     *   **PartSuccess**: partially succeeded.
     *   **AllSuccess**: all succeeded.
     *
     * @example AllSuccess
     *
     * @var string
     */
    public $bizStatusCode;

    /**
     * @description The request ID.
     *
     * @example EA3758E0-8899-17D3-9526-5F62CF33A586
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of nodes that are not created.
     *
     * @var unAllocationId[]
     */
    public $unAllocationId;
    protected $_name = [
        'allocationId'   => 'AllocationId',
        'bizStatusCode'  => 'BizStatusCode',
        'requestId'      => 'RequestId',
        'unAllocationId' => 'UnAllocationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = [];
            if (null !== $this->allocationId && \is_array($this->allocationId)) {
                $n = 0;
                foreach ($this->allocationId as $item) {
                    $res['AllocationId'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizStatusCode) {
            $res['BizStatusCode'] = $this->bizStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->unAllocationId) {
            $res['UnAllocationId'] = [];
            if (null !== $this->unAllocationId && \is_array($this->unAllocationId)) {
                $n = 0;
                foreach ($this->unAllocationId as $item) {
                    $res['UnAllocationId'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopySnapshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            if (!empty($map['AllocationId'])) {
                $model->allocationId = [];
                $n                   = 0;
                foreach ($map['AllocationId'] as $item) {
                    $model->allocationId[$n++] = null !== $item ? allocationId::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizStatusCode'])) {
            $model->bizStatusCode = $map['BizStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UnAllocationId'])) {
            if (!empty($map['UnAllocationId'])) {
                $model->unAllocationId = [];
                $n                     = 0;
                foreach ($map['UnAllocationId'] as $item) {
                    $model->unAllocationId[$n++] = null !== $item ? unAllocationId::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
