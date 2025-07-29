<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterInspectConfigRequest extends Model
{
    /**
     * @description The list of disabled inspection check items.
     *
     * @var string[]
     */
    public $disabledCheckItems;

    /**
     * @description Specifies whether to enable cluster inspection.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The inspection period defined using RFC5545 Recurrence Rule. You must specify BYHOUR and BYMINUTE. Only FREQ=DAILY is supported. COUNT or UNTIL is not supported.
     *
     * @example FREQ=DAILY;BYHOUR=10;BYMINUTE=15
     *
     * @var string
     */
    public $scheduleTime;
    protected $_name = [
        'disabledCheckItems' => 'disabledCheckItems',
        'enabled' => 'enabled',
        'scheduleTime' => 'scheduleTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->disabledCheckItems) {
            $res['disabledCheckItems'] = $this->disabledCheckItems;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->scheduleTime) {
            $res['scheduleTime'] = $this->scheduleTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClusterInspectConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['disabledCheckItems'])) {
            if (!empty($map['disabledCheckItems'])) {
                $model->disabledCheckItems = $map['disabledCheckItems'];
            }
        }
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['scheduleTime'])) {
            $model->scheduleTime = $map['scheduleTime'];
        }

        return $model;
    }
}
