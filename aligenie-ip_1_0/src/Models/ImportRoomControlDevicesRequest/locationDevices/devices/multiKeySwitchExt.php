<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomControlDevicesRequest\locationDevices\devices;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomControlDevicesRequest\locationDevices\devices\multiKeySwitchExt\switchList;

class multiKeySwitchExt extends Model
{
    /**
     * @var switchList[]
     */
    public $switchList;
    protected $_name = [
        'switchList' => 'SwitchList',
    ];

    public function validate()
    {
        if (\is_array($this->switchList)) {
            Model::validateArray($this->switchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->switchList) {
            if (\is_array($this->switchList)) {
                $res['SwitchList'] = [];
                $n1 = 0;
                foreach ($this->switchList as $item1) {
                    $res['SwitchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['SwitchList'])) {
            if (!empty($map['SwitchList'])) {
                $model->switchList = [];
                $n1 = 0;
                foreach ($map['SwitchList'] as $item1) {
                    $model->switchList[$n1] = switchList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
