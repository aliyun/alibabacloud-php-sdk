<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\MuteAllGroupUserResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether the mute was successful. Valid values:
     *
     *   true: The mute was successful.
     *   false: The mute failed.
     *
     * @example true
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
