<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class DescribeServiceLinkedRoleExistsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $existsServiceLinkedRole;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'existsServiceLinkedRole' => 'ExistsServiceLinkedRole',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->existsServiceLinkedRole) {
            $res['ExistsServiceLinkedRole'] = $this->existsServiceLinkedRole;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExistsServiceLinkedRole'])) {
            $model->existsServiceLinkedRole = $map['ExistsServiceLinkedRole'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
