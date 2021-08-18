<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedEventDatas\eventDataItems;
use AlibabaCloud\Tea\Model;

class relatedEventDatas extends Model
{
    /**
     * @description 用户ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description 来源角色： SENDER：发布端，即上行 RECEIVER：订阅端，即下行
     *
     * @var string
     */
    public $role;

    /**
     * @description 事件数据列表
     *
     * @var eventDataItems[]
     */
    public $eventDataItems;
    protected $_name = [
        'userId'         => 'UserId',
        'role'           => 'Role',
        'eventDataItems' => 'EventDataItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->eventDataItems) {
            $res['EventDataItems'] = [];
            if (null !== $this->eventDataItems && \is_array($this->eventDataItems)) {
                $n = 0;
                foreach ($this->eventDataItems as $item) {
                    $res['EventDataItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['EventDataItems'])) {
            if (!empty($map['EventDataItems'])) {
                $model->eventDataItems = [];
                $n                     = 0;
                foreach ($map['EventDataItems'] as $item) {
                    $model->eventDataItems[$n++] = null !== $item ? eventDataItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
