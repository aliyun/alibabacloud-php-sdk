<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponseBody\module\trainStationSearchVOS;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponseBody\module\trainTransferStationSearchVOs;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var trainStationSearchVOS[]
     */
    public $trainStationSearchVOS;

    /**
     * @var trainTransferStationSearchVOs[]
     */
    public $trainTransferStationSearchVOs;
    protected $_name = [
        'trainStationSearchVOS'         => 'train_station_search_v_o_s',
        'trainTransferStationSearchVOs' => 'train_transfer_station_search_v_os',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trainStationSearchVOS) {
            $res['train_station_search_v_o_s'] = [];
            if (null !== $this->trainStationSearchVOS && \is_array($this->trainStationSearchVOS)) {
                $n = 0;
                foreach ($this->trainStationSearchVOS as $item) {
                    $res['train_station_search_v_o_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trainTransferStationSearchVOs) {
            $res['train_transfer_station_search_v_os'] = [];
            if (null !== $this->trainTransferStationSearchVOs && \is_array($this->trainTransferStationSearchVOs)) {
                $n = 0;
                foreach ($this->trainTransferStationSearchVOs as $item) {
                    $res['train_transfer_station_search_v_os'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['train_station_search_v_o_s'])) {
            if (!empty($map['train_station_search_v_o_s'])) {
                $model->trainStationSearchVOS = [];
                $n                            = 0;
                foreach ($map['train_station_search_v_o_s'] as $item) {
                    $model->trainStationSearchVOS[$n++] = null !== $item ? trainStationSearchVOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['train_transfer_station_search_v_os'])) {
            if (!empty($map['train_transfer_station_search_v_os'])) {
                $model->trainTransferStationSearchVOs = [];
                $n                                    = 0;
                foreach ($map['train_transfer_station_search_v_os'] as $item) {
                    $model->trainTransferStationSearchVOs[$n++] = null !== $item ? trainTransferStationSearchVOs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
