<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleResponseBody extends Model
{
    /**
     * @example xxxx
     *
     * @var bool
     */
    public $hasServiceLinkedRole;

    /**
     * @example xxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hasServiceLinkedRole' => 'HasServiceLinkedRole',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasServiceLinkedRole) {
            $res['HasServiceLinkedRole'] = $this->hasServiceLinkedRole;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasServiceLinkedRole'])) {
            $model->hasServiceLinkedRole = $map['HasServiceLinkedRole'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
