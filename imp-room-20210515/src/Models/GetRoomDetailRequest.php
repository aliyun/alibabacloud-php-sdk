<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models;

use AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomDetailRequest\request;
use AlibabaCloud\Tea\Model;

class GetRoomDetailRequest extends Model
{
    /**
     * @var request
     */
    public $request;
    protected $_name = [
        'request' => 'Request',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->request) {
            $res['Request'] = null !== $this->request ? $this->request->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoomDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Request'])) {
            $model->request = request::fromMap($map['Request']);
        }

        return $model;
    }
}
