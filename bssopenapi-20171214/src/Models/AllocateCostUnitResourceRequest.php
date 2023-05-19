<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest\resourceInstanceList;
use AlibabaCloud\Tea\Model;

class AllocateCostUnitResourceRequest extends Model
{
    /**
     * @description The ID of the source cost center.
     *
     *   A value of 0 indicates that the resources to be transferred have not been allocated to a cost center.
     *   A value greater than 0 indicates the ID of an existing cost center.
     *
     * @example 0
     *
     * @var int
     */
    public $fromUnitId;

    /**
     * @description The user ID of the owner of the source cost center.
     *
     * @example 273394581313325532
     *
     * @var int
     */
    public $fromUnitUserId;

    /**
     * @description The resource instances to be transferred.
     *
     * @var resourceInstanceList[]
     */
    public $resourceInstanceList;

    /**
     * @description The ID of the destination cost center.
     *
     *   A value of -1 indicates that the allocated resources are changed to unallocated.
     *   A value greater than 0 indicates the ID of an existing cost center.
     *
     * @example 186419
     *
     * @var int
     */
    public $toUnitId;

    /**
     * @description The user ID of the owner of the destination cost center.
     *
     * @example 241021678450941490
     *
     * @var int
     */
    public $toUnitUserId;
    protected $_name = [
        'fromUnitId'           => 'FromUnitId',
        'fromUnitUserId'       => 'FromUnitUserId',
        'resourceInstanceList' => 'ResourceInstanceList',
        'toUnitId'             => 'ToUnitId',
        'toUnitUserId'         => 'ToUnitUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromUnitId) {
            $res['FromUnitId'] = $this->fromUnitId;
        }
        if (null !== $this->fromUnitUserId) {
            $res['FromUnitUserId'] = $this->fromUnitUserId;
        }
        if (null !== $this->resourceInstanceList) {
            $res['ResourceInstanceList'] = [];
            if (null !== $this->resourceInstanceList && \is_array($this->resourceInstanceList)) {
                $n = 0;
                foreach ($this->resourceInstanceList as $item) {
                    $res['ResourceInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->toUnitId) {
            $res['ToUnitId'] = $this->toUnitId;
        }
        if (null !== $this->toUnitUserId) {
            $res['ToUnitUserId'] = $this->toUnitUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateCostUnitResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromUnitId'])) {
            $model->fromUnitId = $map['FromUnitId'];
        }
        if (isset($map['FromUnitUserId'])) {
            $model->fromUnitUserId = $map['FromUnitUserId'];
        }
        if (isset($map['ResourceInstanceList'])) {
            if (!empty($map['ResourceInstanceList'])) {
                $model->resourceInstanceList = [];
                $n                           = 0;
                foreach ($map['ResourceInstanceList'] as $item) {
                    $model->resourceInstanceList[$n++] = null !== $item ? resourceInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ToUnitId'])) {
            $model->toUnitId = $map['ToUnitId'];
        }
        if (isset($map['ToUnitUserId'])) {
            $model->toUnitUserId = $map['ToUnitUserId'];
        }

        return $model;
    }
}
