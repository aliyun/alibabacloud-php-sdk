<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionsResponseBody\typeList;
use AlibabaCloud\Tea\Model;

class DescribePendingMaintenanceActionsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 314127C2-B6C1-4F58-B1F6-E6B645******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of pending events.
     *
     * @var typeList[]
     */
    public $typeList;
    protected $_name = [
        'requestId' => 'RequestId',
        'typeList'  => 'TypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->typeList) {
            $res['TypeList'] = [];
            if (null !== $this->typeList && \is_array($this->typeList)) {
                $n = 0;
                foreach ($this->typeList as $item) {
                    $res['TypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePendingMaintenanceActionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = [];
                $n               = 0;
                foreach ($map['TypeList'] as $item) {
                    $model->typeList[$n++] = null !== $item ? typeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
