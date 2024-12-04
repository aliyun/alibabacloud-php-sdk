<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Tea\Model;

class timeout extends Model
{
    /**
     * @description The timeout period. Unit: minutes. Valid values: [1, 21600].
     *
     * @example 10
     *
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'timeoutInMinutes' => 'TimeoutInMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeout
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}
