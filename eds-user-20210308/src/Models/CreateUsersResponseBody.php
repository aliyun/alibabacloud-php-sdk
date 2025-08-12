<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody\createResult;

class CreateUsersResponseBody extends Model
{
    /**
     * @var bool
     */
    public $allSucceed;

    /**
     * @var createResult
     */
    public $createResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'allSucceed' => 'AllSucceed',
        'createResult' => 'CreateResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->createResult) {
            $this->createResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allSucceed) {
            $res['AllSucceed'] = $this->allSucceed;
        }

        if (null !== $this->createResult) {
            $res['CreateResult'] = null !== $this->createResult ? $this->createResult->toArray($noStream) : $this->createResult;
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
        if (isset($map['AllSucceed'])) {
            $model->allSucceed = $map['AllSucceed'];
        }

        if (isset($map['CreateResult'])) {
            $model->createResult = createResult::fromMap($map['CreateResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
