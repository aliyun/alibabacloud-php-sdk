<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeRCInstanceVncUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $loginUrl;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginUrl'  => 'LoginUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginUrl) {
            $res['LoginUrl'] = $this->loginUrl;
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
        if (isset($map['LoginUrl'])) {
            $model->loginUrl = $map['LoginUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
