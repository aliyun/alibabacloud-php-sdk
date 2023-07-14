<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteAlertRuleRequest extends Model
{
    /**
     * @description Indicates whether the alert rule was successfully deleted.
     *
     *   `true`: The specified data is deleted.
     *   `false`: The specified data fails to be deleted.
     *
     * @example 123
     *
     * @var int
     */
    public $alertId;
    protected $_name = [
        'alertId' => 'AlertId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlertRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }

        return $model;
    }
}
