<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachableEcsInstancesResponseBody\ecsLabelInfo;
use AlibabaCloud\Tea\Model;

class ListDbfsAttachableEcsInstancesResponseBody extends Model
{
    /**
     * @var ecsLabelInfo[]
     */
    public $ecsLabelInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ecsLabelInfo' => 'EcsLabelInfo',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsLabelInfo) {
            $res['EcsLabelInfo'] = [];
            if (null !== $this->ecsLabelInfo && \is_array($this->ecsLabelInfo)) {
                $n = 0;
                foreach ($this->ecsLabelInfo as $item) {
                    $res['EcsLabelInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDbfsAttachableEcsInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsLabelInfo'])) {
            if (!empty($map['EcsLabelInfo'])) {
                $model->ecsLabelInfo = [];
                $n                   = 0;
                foreach ($map['EcsLabelInfo'] as $item) {
                    $model->ecsLabelInfo[$n++] = null !== $item ? ecsLabelInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
