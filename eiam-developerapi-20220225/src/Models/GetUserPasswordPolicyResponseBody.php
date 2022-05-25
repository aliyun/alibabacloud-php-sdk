<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserPasswordPolicyResponseBody\passwordComplexityItem;
use AlibabaCloud\Tea\Model;

class GetUserPasswordPolicyResponseBody extends Model
{
    /**
     * @description 密码修改周期, 单位毫秒，-1表示永不过期
     *
     * @var int
     */
    public $activeCycle;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 密码最短长度，-1表示不限制
     *
     * @var int
     */
    public $minLength;

    /**
     * @description 密码复杂项
     *
     * @var passwordComplexityItem
     */
    public $passwordComplexityItem;

    /**
     * @description 保留最近密码记录数
     *
     * @var int
     */
    public $reservationCount;
    protected $_name = [
        'activeCycle'            => 'activeCycle',
        'instanceId'             => 'instanceId',
        'minLength'              => 'minLength',
        'passwordComplexityItem' => 'passwordComplexityItem',
        'reservationCount'       => 'reservationCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeCycle) {
            $res['activeCycle'] = $this->activeCycle;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->minLength) {
            $res['minLength'] = $this->minLength;
        }
        if (null !== $this->passwordComplexityItem) {
            $res['passwordComplexityItem'] = null !== $this->passwordComplexityItem ? $this->passwordComplexityItem->toMap() : null;
        }
        if (null !== $this->reservationCount) {
            $res['reservationCount'] = $this->reservationCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserPasswordPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['activeCycle'])) {
            $model->activeCycle = $map['activeCycle'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['minLength'])) {
            $model->minLength = $map['minLength'];
        }
        if (isset($map['passwordComplexityItem'])) {
            $model->passwordComplexityItem = passwordComplexityItem::fromMap($map['passwordComplexityItem']);
        }
        if (isset($map['reservationCount'])) {
            $model->reservationCount = $map['reservationCount'];
        }

        return $model;
    }
}
