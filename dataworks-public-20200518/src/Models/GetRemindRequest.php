<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetRemindRequest extends Model
{
    /**
     * @description The custom alert rule ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $remindId;
    protected $_name = [
        'remindId' => 'RemindId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRemindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }

        return $model;
    }
}
