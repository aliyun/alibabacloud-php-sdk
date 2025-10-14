<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookResponseBody\errorData\orderList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookResponseBody\errorData\orderList\orderAttribute\abaPayLockRateInfo;

class orderAttribute extends Model
{
    /**
     * @var abaPayLockRateInfo
     */
    public $abaPayLockRateInfo;
    protected $_name = [
        'abaPayLockRateInfo' => 'aba_pay_lock_rate_info',
    ];

    public function validate()
    {
        if (null !== $this->abaPayLockRateInfo) {
            $this->abaPayLockRateInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abaPayLockRateInfo) {
            $res['aba_pay_lock_rate_info'] = null !== $this->abaPayLockRateInfo ? $this->abaPayLockRateInfo->toArray($noStream) : $this->abaPayLockRateInfo;
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
        if (isset($map['aba_pay_lock_rate_info'])) {
            $model->abaPayLockRateInfo = abaPayLockRateInfo::fromMap($map['aba_pay_lock_rate_info']);
        }

        return $model;
    }
}
