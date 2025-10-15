<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class AddApplicationAccountToUserResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationAccountId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationAccountId' => 'ApplicationAccountId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationAccountId) {
            $res['ApplicationAccountId'] = $this->applicationAccountId;
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
        if (isset($map['ApplicationAccountId'])) {
            $model->applicationAccountId = $map['ApplicationAccountId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
