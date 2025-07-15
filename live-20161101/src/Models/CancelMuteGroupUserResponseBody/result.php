<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\CancelMuteGroupUserResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether the members are unmuted. Valid values:
     *
     *   true: The members are unmuted.
     *   false: The members failed to be unmuted.
     *
     * @example false
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
