<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyResponseBody\updateResult;

class UpdatePropertyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var updateResult
     */
    public $updateResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'updateResult' => 'UpdateResult',
    ];

    public function validate()
    {
        if (null !== $this->updateResult) {
            $this->updateResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->updateResult) {
            $res['UpdateResult'] = null !== $this->updateResult ? $this->updateResult->toArray($noStream) : $this->updateResult;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UpdateResult'])) {
            $model->updateResult = updateResult::fromMap($map['UpdateResult']);
        }

        return $model;
    }
}
