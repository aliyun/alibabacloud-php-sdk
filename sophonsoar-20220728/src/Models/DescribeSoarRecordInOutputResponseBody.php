<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribeSoarRecordInOutputResponseBody extends Model
{
    /**
     * @var string
     */
    public $inOutputInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'inOutputInfo' => 'InOutputInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inOutputInfo) {
            $res['InOutputInfo'] = $this->inOutputInfo;
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
        if (isset($map['InOutputInfo'])) {
            $model->inOutputInfo = $map['InOutputInfo'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
