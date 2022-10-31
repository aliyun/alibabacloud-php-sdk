<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class GetMessageUserInfoRequest extends Model
{
    /**
     * @var string
     */
    public $cloudUid;
    protected $_name = [
        'cloudUid' => 'CloudUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudUid) {
            $res['CloudUid'] = $this->cloudUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMessageUserInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudUid'])) {
            $model->cloudUid = $map['CloudUid'];
        }

        return $model;
    }
}
