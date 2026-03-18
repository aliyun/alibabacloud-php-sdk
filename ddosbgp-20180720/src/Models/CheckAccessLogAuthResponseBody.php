<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;

class CheckAccessLogAuthResponseBody extends Model
{
    /**
     * @var bool
     */
    public $accessLogAuth;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessLogAuth' => 'AccessLogAuth',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLogAuth) {
            $res['AccessLogAuth'] = $this->accessLogAuth;
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
        if (isset($map['AccessLogAuth'])) {
            $model->accessLogAuth = $map['AccessLogAuth'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
