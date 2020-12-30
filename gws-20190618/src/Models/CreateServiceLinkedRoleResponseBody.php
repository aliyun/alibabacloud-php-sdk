<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceLinkedRoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $alreadyExists;
    protected $_name = [
        'requestId'     => 'RequestId',
        'alreadyExists' => 'AlreadyExists',
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
        if (null !== $this->alreadyExists) {
            $res['AlreadyExists'] = $this->alreadyExists;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceLinkedRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AlreadyExists'])) {
            $model->alreadyExists = $map['AlreadyExists'];
        }

        return $model;
    }
}
