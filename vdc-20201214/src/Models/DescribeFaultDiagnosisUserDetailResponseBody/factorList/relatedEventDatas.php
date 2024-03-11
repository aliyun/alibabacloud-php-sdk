<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedEventDatas\eventDataItems;
use AlibabaCloud\Tea\Model;

class relatedEventDatas extends Model
{
    /**
     * @var eventDataItems[]
     */
    public $eventDataItems;

    /**
     * @example SENDER
     *
     * @var string
     */
    public $role;

    /**
     * @example 0a497933****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'eventDataItems' => 'EventDataItems',
        'role'           => 'Role',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventDataItems) {
            $res['EventDataItems'] = [];
            if (null !== $this->eventDataItems && \is_array($this->eventDataItems)) {
                $n = 0;
                foreach ($this->eventDataItems as $item) {
                    $res['EventDataItems'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return relatedEventDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventDataItems'])) {
            if (!empty($map['EventDataItems'])) {
                $model->eventDataItems = [];
                $n                     = 0;
                foreach ($map['EventDataItems'] as $item) {
                    $model->eventDataItems[$n++] = null !== $item ? eventDataItems::fromMap($item) : $item;
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
