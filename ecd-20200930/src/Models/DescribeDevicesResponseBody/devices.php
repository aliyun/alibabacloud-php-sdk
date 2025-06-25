<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDevicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDevicesResponseBody\devices\endUserList;

class devices extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var endUserList[]
     */
    public $endUserList;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'endUserList' => 'EndUserList',
    ];

    public function validate()
    {
        if (\is_array($this->endUserList)) {
            Model::validateArray($this->endUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->endUserList) {
            if (\is_array($this->endUserList)) {
                $res['EndUserList'] = [];
                $n1 = 0;
                foreach ($this->endUserList as $item1) {
                    $res['EndUserList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['EndUserList'])) {
            if (!empty($map['EndUserList'])) {
                $model->endUserList = [];
                $n1 = 0;
                foreach ($map['EndUserList'] as $item1) {
                    $model->endUserList[$n1] = endUserList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
