<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class CreateSlrRoleResponseBody extends Model
{
    /**
     * @var bool
     */
    public $hasPermission;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hasPermission' => 'HasPermission',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasPermission) {
            $res['HasPermission'] = $this->hasPermission;
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
        if (isset($map['HasPermission'])) {
            $model->hasPermission = $map['HasPermission'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
