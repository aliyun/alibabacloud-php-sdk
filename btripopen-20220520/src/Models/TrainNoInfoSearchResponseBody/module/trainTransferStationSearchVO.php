<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainTransferStationSearchVO\transferDetailList;

class trainTransferStationSearchVO extends Model
{
    /**
     * @var transferDetailList[]
     */
    public $transferDetailList;

    /**
     * @var string
     */
    public $transferType;
    protected $_name = [
        'transferDetailList' => 'transfer_detail_list',
        'transferType' => 'transfer_type',
    ];

    public function validate()
    {
        if (\is_array($this->transferDetailList)) {
            Model::validateArray($this->transferDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transferDetailList) {
            if (\is_array($this->transferDetailList)) {
                $res['transfer_detail_list'] = [];
                $n1 = 0;
                foreach ($this->transferDetailList as $item1) {
                    $res['transfer_detail_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->transferType) {
            $res['transfer_type'] = $this->transferType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['transfer_detail_list'])) {
            if (!empty($map['transfer_detail_list'])) {
                $model->transferDetailList = [];
                $n1 = 0;
                foreach ($map['transfer_detail_list'] as $item1) {
                    $model->transferDetailList[$n1] = transferDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['transfer_type'])) {
            $model->transferType = $map['transfer_type'];
        }

        return $model;
    }
}
