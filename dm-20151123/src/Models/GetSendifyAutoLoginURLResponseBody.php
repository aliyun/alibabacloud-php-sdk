<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class GetSendifyAutoLoginURLResponseBody extends Model
{
    /**
     * @var string
     */
    public $autoLoginURL;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoLoginURL' => 'AutoLoginURL',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoLoginURL) {
            $res['AutoLoginURL'] = $this->autoLoginURL;
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
        if (isset($map['AutoLoginURL'])) {
            $model->autoLoginURL = $map['AutoLoginURL'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
