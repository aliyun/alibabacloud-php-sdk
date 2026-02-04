<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CheckInstanceForDeleteResponseBody\checkInstanceResult;

class CheckInstanceForDeleteResponseBody extends Model
{
    /**
     * @var checkInstanceResult
     */
    public $checkInstanceResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkInstanceResult' => 'CheckInstanceResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->checkInstanceResult) {
            $this->checkInstanceResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkInstanceResult) {
            $res['CheckInstanceResult'] = null !== $this->checkInstanceResult ? $this->checkInstanceResult->toArray($noStream) : $this->checkInstanceResult;
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
        if (isset($map['CheckInstanceResult'])) {
            $model->checkInstanceResult = checkInstanceResult::fromMap($map['CheckInstanceResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
