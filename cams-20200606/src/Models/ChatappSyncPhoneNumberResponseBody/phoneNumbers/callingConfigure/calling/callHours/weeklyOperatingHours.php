<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ChatappSyncPhoneNumberResponseBody\phoneNumbers\callingConfigure\calling\callHours;

use AlibabaCloud\Dara\Model;

class weeklyOperatingHours extends Model
{
    /**
     * @var string
     */
    public $closeTime;

    /**
     * @var string
     */
    public $dayOfWeek;

    /**
     * @var string
     */
    public $openTime;
    protected $_name = [
        'closeTime' => 'CloseTime',
        'dayOfWeek' => 'DayOfWeek',
        'openTime' => 'OpenTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->closeTime) {
            $res['CloseTime'] = $this->closeTime;
        }

        if (null !== $this->dayOfWeek) {
            $res['DayOfWeek'] = $this->dayOfWeek;
        }

        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
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
        if (isset($map['CloseTime'])) {
            $model->closeTime = $map['CloseTime'];
        }

        if (isset($map['DayOfWeek'])) {
            $model->dayOfWeek = $map['DayOfWeek'];
        }

        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }

        return $model;
    }
}
