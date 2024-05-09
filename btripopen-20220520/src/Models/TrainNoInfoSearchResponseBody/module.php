<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainStationSearchVO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainTransferStationSearchVO;
use AlibabaCloud\Tea\Model;

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
        'trainStationSearchVO'         => 'train_station_search_v_o',
        'trainTransferStationSearchVO' => 'train_transfer_station_search_v_o',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trainStationSearchVO) {
            $res['train_station_search_v_o'] = null !== $this->trainStationSearchVO ? $this->trainStationSearchVO->toMap() : null;
        }
        if (null !== $this->trainTransferStationSearchVO) {
            $res['train_transfer_station_search_v_o'] = null !== $this->trainTransferStationSearchVO ? $this->trainTransferStationSearchVO->toMap() : null;
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
        if (isset($map['train_station_search_v_o'])) {
            $model->trainStationSearchVO = trainStationSearchVO::fromMap($map['train_station_search_v_o']);
        }
        if (isset($map['train_transfer_station_search_v_o'])) {
            $model->trainTransferStationSearchVO = trainTransferStationSearchVO::fromMap($map['train_transfer_station_search_v_o']);
        }

        return $model;
    }
}
