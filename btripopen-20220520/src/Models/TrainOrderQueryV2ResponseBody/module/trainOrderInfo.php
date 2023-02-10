<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo\trainInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo\trainTransferInfo;
use AlibabaCloud\Tea\Model;

class trainOrderInfo extends Model
{
    /**
     * @var trainInfoList[]
     */
    public $trainInfoList;

    /**
     * @var trainTransferInfo
     */
    public $trainTransferInfo;
    protected $_name = [
        'trainInfoList'     => 'train_info_list',
        'trainTransferInfo' => 'train_transfer_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trainInfoList) {
            $res['train_info_list'] = [];
            if (null !== $this->trainInfoList && \is_array($this->trainInfoList)) {
                $n = 0;
                foreach ($this->trainInfoList as $item) {
                    $res['train_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trainTransferInfo) {
            $res['train_transfer_info'] = null !== $this->trainTransferInfo ? $this->trainTransferInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trainOrderInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['train_info_list'])) {
            if (!empty($map['train_info_list'])) {
                $model->trainInfoList = [];
                $n                    = 0;
                foreach ($map['train_info_list'] as $item) {
                    $model->trainInfoList[$n++] = null !== $item ? trainInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['train_transfer_info'])) {
            $model->trainTransferInfo = trainTransferInfo::fromMap($map['train_transfer_info']);
        }

        return $model;
    }
}
