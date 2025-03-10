<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleResponseBody extends Model
{
    /**
     * @example False
     *
     * @var bool
     */
    public $hasServiceLinkedRole;

    /**
     * @example 1F455133-981E-5AD0-80EB-26EA1EF3C65F
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
