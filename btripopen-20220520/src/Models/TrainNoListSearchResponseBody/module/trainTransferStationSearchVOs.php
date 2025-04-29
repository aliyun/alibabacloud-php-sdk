<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponseBody\module\trainTransferStationSearchVOs\transferDetailList;

class trainTransferStationSearchVOs extends Model
{
    /**
     * @var string
     */
    public $arrStation;

    /**
     * @var string
     */
    public $depStation;

    /**
     * @var string
     */
    public $lineKey;

    /**
     * @var string
     */
    public $middleStation;

    /**
     * @var transferDetailList[]
     */
    public $transferDetailList;

    /**
     * @var string
     */
    public $transferType;
    protected $_name = [
        'arrStation' => 'arr_station',
        'depStation' => 'dep_station',
        'lineKey' => 'line_key',
        'middleStation' => 'middle_station',
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
        if (null !== $this->arrStation) {
            $res['arr_station'] = $this->arrStation;
        }

        if (null !== $this->depStation) {
            $res['dep_station'] = $this->depStation;
        }

        if (null !== $this->lineKey) {
            $res['line_key'] = $this->lineKey;
        }

        if (null !== $this->middleStation) {
            $res['middle_station'] = $this->middleStation;
        }

        if (null !== $this->transferDetailList) {
            if (\is_array($this->transferDetailList)) {
                $res['transfer_detail_list'] = [];
                $n1 = 0;
                foreach ($this->transferDetailList as $item1) {
                    $res['transfer_detail_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['arr_station'])) {
            $model->arrStation = $map['arr_station'];
        }

        if (isset($map['dep_station'])) {
            $model->depStation = $map['dep_station'];
        }

        if (isset($map['line_key'])) {
            $model->lineKey = $map['line_key'];
        }

        if (isset($map['middle_station'])) {
            $model->middleStation = $map['middle_station'];
        }

        if (isset($map['transfer_detail_list'])) {
            if (!empty($map['transfer_detail_list'])) {
                $model->transferDetailList = [];
                $n1 = 0;
                foreach ($map['transfer_detail_list'] as $item1) {
                    $model->transferDetailList[$n1++] = transferDetailList::fromMap($item1);
                }
            }
        }

        if (isset($map['transfer_type'])) {
            $model->transferType = $map['transfer_type'];
        }

        return $model;
    }
}
