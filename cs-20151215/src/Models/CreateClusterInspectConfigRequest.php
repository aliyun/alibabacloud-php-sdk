<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterInspectConfigRequest extends Model
{
    /**
     * @description The list of disabled inspection items.
     *
     * @var string[]
     */
    public $disabledCheckItems;

    /**
     * @description Specifies whether to enable cluster inspection.
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The inspection period defined using RFC5545 Recurrence Rule. You must specify BYHOUR and BYMINUTE. Only FREQ=DAILY is supported. COUNT or UNTIL is not supported.
     *
     * This parameter is required.
     *
     * @example FREQ=DAILY;BYHOUR=10;BYMINUTE=15
     *
     * @var string
     */
    public $recurrence;
    protected $_name = [
        'disabledCheckItems' => 'disabledCheckItems',
        'enabled' => 'enabled',
        'recurrence' => 'recurrence',
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
        if (null !== $this->recurrence) {
            $res['recurrence'] = $this->recurrence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterInspectConfigRequest
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
        if (isset($map['recurrence'])) {
            $model->recurrence = $map['recurrence'];
        }

        return $model;
    }
}
