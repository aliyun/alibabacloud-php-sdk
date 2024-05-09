<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainTransferStationSearchVO\transferDetailList;
use AlibabaCloud\Tea\Model;

class trainTransferStationSearchVO extends Model
{
    /**
     * @var transferDetailList[]
     */
    public $transferDetailList;

    /**
     * @example 1
     *
     * @var string
     */
    public $transferType;
    protected $_name = [
        'transferDetailList' => 'transfer_detail_list',
        'transferType'       => 'transfer_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transferDetailList) {
            $res['transfer_detail_list'] = [];
            if (null !== $this->transferDetailList && \is_array($this->transferDetailList)) {
                $n = 0;
                foreach ($this->transferDetailList as $item) {
                    $res['transfer_detail_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transferType) {
            $res['transfer_type'] = $this->transferType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trainTransferStationSearchVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['transfer_detail_list'])) {
            if (!empty($map['transfer_detail_list'])) {
                $model->transferDetailList = [];
                $n                         = 0;
                foreach ($map['transfer_detail_list'] as $item) {
                    $model->transferDetailList[$n++] = null !== $item ? transferDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['transfer_type'])) {
            $model->transferType = $map['transfer_type'];
        }

        return $model;
    }
}
