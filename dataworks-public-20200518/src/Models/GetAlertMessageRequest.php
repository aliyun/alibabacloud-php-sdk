<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetAlertMessageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1421
     *
     * @var string
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
     * @return GetAlertMessageRequest
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
