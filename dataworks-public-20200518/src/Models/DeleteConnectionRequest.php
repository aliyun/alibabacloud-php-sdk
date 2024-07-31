<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteConnectionRequest extends Model
{
    /**
     * @description The data source ID. You can call the [ListConnection](https://help.aliyun.com/document_detail/173911.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $connectionId;
    protected $_name = [
        'connectionId' => 'ConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        return $model;
    }
}
