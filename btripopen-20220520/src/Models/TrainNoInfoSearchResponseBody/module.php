<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainStationSearchVO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainTransferStationSearchVO;

class module extends Model
{
    /**
     * @var trainStationSearchVO
     */
    public $trainStationSearchVO;

    /**
     * @var trainTransferStationSearchVO
     */
    public $trainTransferStationSearchVO;
    protected $_name = [
        'trainStationSearchVO' => 'train_station_search_v_o',
        'trainTransferStationSearchVO' => 'train_transfer_station_search_v_o',
    ];

    public function validate()
    {
        if (null !== $this->trainStationSearchVO) {
            $this->trainStationSearchVO->validate();
        }
        if (null !== $this->trainTransferStationSearchVO) {
            $this->trainTransferStationSearchVO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trainStationSearchVO) {
            $res['train_station_search_v_o'] = null !== $this->trainStationSearchVO ? $this->trainStationSearchVO->toArray($noStream) : $this->trainStationSearchVO;
        }

        if (null !== $this->trainTransferStationSearchVO) {
            $res['train_transfer_station_search_v_o'] = null !== $this->trainTransferStationSearchVO ? $this->trainTransferStationSearchVO->toArray($noStream) : $this->trainTransferStationSearchVO;
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
        if (isset($map['train_station_search_v_o'])) {
            $model->trainStationSearchVO = trainStationSearchVO::fromMap($map['train_station_search_v_o']);
        }

        if (isset($map['train_transfer_station_search_v_o'])) {
            $model->trainTransferStationSearchVO = trainTransferStationSearchVO::fromMap($map['train_transfer_station_search_v_o']);
        }

        return $model;
    }
}
