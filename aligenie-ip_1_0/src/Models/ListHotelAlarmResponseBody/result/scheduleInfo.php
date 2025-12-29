<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelAlarmResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelAlarmResponseBody\result\scheduleInfo\once;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelAlarmResponseBody\result\scheduleInfo\weekly;

class scheduleInfo extends Model
{
    /**
     * @var once
     */
    public $once;

    /**
     * @var string
     */
    public $type;

    /**
     * @var weekly
     */
    public $weekly;
    protected $_name = [
        'once' => 'Once',
        'type' => 'Type',
        'weekly' => 'Weekly',
    ];

    public function validate()
    {
        if (null !== $this->once) {
            $this->once->validate();
        }
        if (null !== $this->weekly) {
            $this->weekly->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->once) {
            $res['Once'] = null !== $this->once ? $this->once->toArray($noStream) : $this->once;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->weekly) {
            $res['Weekly'] = null !== $this->weekly ? $this->weekly->toArray($noStream) : $this->weekly;
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
        if (isset($map['Once'])) {
            $model->once = once::fromMap($map['Once']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Weekly'])) {
            $model->weekly = weekly::fromMap($map['Weekly']);
        }

        return $model;
    }
}
