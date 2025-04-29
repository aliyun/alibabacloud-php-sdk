<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponseBody\module\trainStationSearchVOS;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponseBody\module\trainTransferStationSearchVOs;

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
        'trainStationSearchVOS' => 'train_station_search_v_o_s',
        'trainTransferStationSearchVOs' => 'train_transfer_station_search_v_os',
    ];

    public function validate()
    {
        if (\is_array($this->trainStationSearchVOS)) {
            Model::validateArray($this->trainStationSearchVOS);
        }
        if (\is_array($this->trainTransferStationSearchVOs)) {
            Model::validateArray($this->trainTransferStationSearchVOs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trainStationSearchVOS) {
            if (\is_array($this->trainStationSearchVOS)) {
                $res['train_station_search_v_o_s'] = [];
                $n1 = 0;
                foreach ($this->trainStationSearchVOS as $item1) {
                    $res['train_station_search_v_o_s'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->trainTransferStationSearchVOs) {
            if (\is_array($this->trainTransferStationSearchVOs)) {
                $res['train_transfer_station_search_v_os'] = [];
                $n1 = 0;
                foreach ($this->trainTransferStationSearchVOs as $item1) {
                    $res['train_transfer_station_search_v_os'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['train_station_search_v_o_s'])) {
            if (!empty($map['train_station_search_v_o_s'])) {
                $model->trainStationSearchVOS = [];
                $n1 = 0;
                foreach ($map['train_station_search_v_o_s'] as $item1) {
                    $model->trainStationSearchVOS[$n1++] = trainStationSearchVOS::fromMap($item1);
                }
            }
        }

        if (isset($map['train_transfer_station_search_v_os'])) {
            if (!empty($map['train_transfer_station_search_v_os'])) {
                $model->trainTransferStationSearchVOs = [];
                $n1 = 0;
                foreach ($map['train_transfer_station_search_v_os'] as $item1) {
                    $model->trainTransferStationSearchVOs[$n1++] = trainTransferStationSearchVOs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
