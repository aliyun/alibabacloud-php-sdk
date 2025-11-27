<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class RdsCustomInitResponseBody extends Model
{
    /**
     * @var bool
     */
    public $registerUidSuccess;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'registerUidSuccess' => 'RegisterUidSuccess',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registerUidSuccess) {
            $res['RegisterUidSuccess'] = $this->registerUidSuccess;
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
        if (isset($map['RegisterUidSuccess'])) {
            $model->registerUidSuccess = $map['RegisterUidSuccess'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
