<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $hasServiceLinkedRole;
    protected $_name = [
        'requestId'            => 'RequestId',
        'hasServiceLinkedRole' => 'HasServiceLinkedRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->hasServiceLinkedRole) {
            $res['HasServiceLinkedRole'] = $this->hasServiceLinkedRole;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HasServiceLinkedRole'])) {
            $model->hasServiceLinkedRole = $map['HasServiceLinkedRole'];
        }

        return $model;
    }
}
