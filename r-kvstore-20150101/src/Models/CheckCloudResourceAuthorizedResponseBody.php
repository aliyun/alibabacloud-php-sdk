<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class CheckCloudResourceAuthorizedResponseBody extends Model
{
    /**
     * @var int
     */
    public $authorizationState;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizationState' => 'AuthorizationState',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationState) {
            $res['AuthorizationState'] = $this->authorizationState;
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
        if (isset($map['AuthorizationState'])) {
            $model->authorizationState = $map['AuthorizationState'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
