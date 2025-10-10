<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedEventDatas\eventDataItems;

class relatedEventDatas extends Model
{
    /**
     * @var eventDataItems[]
     */
    public $eventDataItems;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'eventDataItems' => 'EventDataItems',
        'role' => 'Role',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->eventDataItems)) {
            Model::validateArray($this->eventDataItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventDataItems) {
            if (\is_array($this->eventDataItems)) {
                $res['EventDataItems'] = [];
                $n1 = 0;
                foreach ($this->eventDataItems as $item1) {
                    $res['EventDataItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['EventDataItems'])) {
            if (!empty($map['EventDataItems'])) {
                $model->eventDataItems = [];
                $n1 = 0;
                foreach ($map['EventDataItems'] as $item1) {
                    $model->eventDataItems[$n1] = eventDataItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
