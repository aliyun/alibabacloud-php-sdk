<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class CreateAuthorizationResponseBody extends Model
{
    /**
     * @var string
     */
    public $authorizationId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizationId' => 'authorizationId',
        'requestId'       => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationId) {
            $res['authorizationId'] = $this->authorizationId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuthorizationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authorizationId'])) {
            $model->authorizationId = $map['authorizationId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
