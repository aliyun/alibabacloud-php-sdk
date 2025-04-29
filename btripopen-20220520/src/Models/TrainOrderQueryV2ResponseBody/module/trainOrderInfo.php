<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo\trainInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo\trainTransferInfo;

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
        'trainInfoList' => 'train_info_list',
        'trainTransferInfo' => 'train_transfer_info',
    ];

    public function validate()
    {
        if (\is_array($this->trainInfoList)) {
            Model::validateArray($this->trainInfoList);
        }
        if (null !== $this->trainTransferInfo) {
            $this->trainTransferInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trainInfoList) {
            if (\is_array($this->trainInfoList)) {
                $res['train_info_list'] = [];
                $n1 = 0;
                foreach ($this->trainInfoList as $item1) {
                    $res['train_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->trainTransferInfo) {
            $res['train_transfer_info'] = null !== $this->trainTransferInfo ? $this->trainTransferInfo->toArray($noStream) : $this->trainTransferInfo;
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
        if (isset($map['train_info_list'])) {
            if (!empty($map['train_info_list'])) {
                $model->trainInfoList = [];
                $n1 = 0;
                foreach ($map['train_info_list'] as $item1) {
                    $model->trainInfoList[$n1++] = trainInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['train_transfer_info'])) {
            $model->trainTransferInfo = trainTransferInfo::fromMap($map['train_transfer_info']);
        }

        return $model;
    }
}
