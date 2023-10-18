<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterNodepoolResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 7263C978-3DBD-4E06-B319-793B38A2F388
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'requestId' => 'request_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterNodepoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }

        return $model;
    }
}
