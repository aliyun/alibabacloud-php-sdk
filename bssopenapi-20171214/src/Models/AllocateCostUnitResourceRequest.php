<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest\resourceInstanceList;
use AlibabaCloud\Tea\Model;

class AllocateCostUnitResourceRequest extends Model
{
    /**
     * @var int
     */
    public $fromUnitUserId;

    /**
     * @var int
     */
    public $fromUnitId;

    /**
     * @var int
     */
    public $toUnitUserId;

    /**
     * @var int
     */
    public $toUnitId;

    /**
     * @var resourceInstanceList[]
     */
    public $resourceInstanceList;
    protected $_name = [
        'fromUnitUserId'       => 'FromUnitUserId',
        'fromUnitId'           => 'FromUnitId',
        'toUnitUserId'         => 'ToUnitUserId',
        'toUnitId'             => 'ToUnitId',
        'resourceInstanceList' => 'ResourceInstanceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromUnitUserId) {
            $res['FromUnitUserId'] = $this->fromUnitUserId;
        }
        if (null !== $this->fromUnitId) {
            $res['FromUnitId'] = $this->fromUnitId;
        }
        if (null !== $this->toUnitUserId) {
            $res['ToUnitUserId'] = $this->toUnitUserId;
        }
        if (null !== $this->toUnitId) {
            $res['ToUnitId'] = $this->toUnitId;
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
        if (isset($map['FromUnitUserId'])) {
            $model->fromUnitUserId = $map['FromUnitUserId'];
        }
        if (isset($map['FromUnitId'])) {
            $model->fromUnitId = $map['FromUnitId'];
        }
        if (isset($map['ToUnitUserId'])) {
            $model->toUnitUserId = $map['ToUnitUserId'];
        }
        if (isset($map['ToUnitId'])) {
            $model->toUnitId = $map['ToUnitId'];
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

        return $model;
    }
}
