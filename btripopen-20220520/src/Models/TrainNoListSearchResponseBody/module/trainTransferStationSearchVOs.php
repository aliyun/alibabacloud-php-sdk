<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponseBody\module\trainTransferStationSearchVOs\transferDetailList;
use AlibabaCloud\Tea\Model;

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
     * @example 1
     *
     * @var string
     */
    public $transferType;
    protected $_name = [
        'arrStation'         => 'arr_station',
        'depStation'         => 'dep_station',
        'lineKey'            => 'line_key',
        'middleStation'      => 'middle_station',
        'transferDetailList' => 'transfer_detail_list',
        'transferType'       => 'transfer_type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
     * @return trainTransferStationSearchVOs
     */
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
