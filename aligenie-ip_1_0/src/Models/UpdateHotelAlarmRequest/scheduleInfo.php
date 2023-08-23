<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmRequest;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmRequest\scheduleInfo\once;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmRequest\scheduleInfo\weekly;
use AlibabaCloud\Tea\Model;

class scheduleInfo extends Model
{
    /**
     * @var once
     */
    public $once;

    /**
     * @description ONCE, WEEKLY
     *
     * @example ONCE
     *
     * @var string
     */
    public $type;

    /**
     * @var weekly
     */
    public $weekly;
    protected $_name = [
        'once'   => 'Once',
        'type'   => 'Type',
        'weekly' => 'Weekly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->once) {
            $res['Once'] = null !== $this->once ? $this->once->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weekly) {
            $res['Weekly'] = null !== $this->weekly ? $this->weekly->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleInfo
     */
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
