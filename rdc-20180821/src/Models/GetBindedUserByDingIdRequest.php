<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class GetBindedUserByDingIdRequest extends Model
{
    /**
     * @var string
     */
    public $dingId;
    protected $_name = [
        'dingId' => 'DingId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingId) {
            $res['DingId'] = $this->dingId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBindedUserByDingIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingId'])) {
            $model->dingId = $map['DingId'];
        }

        return $model;
    }
}
