<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class CheckMailRegisteredResponseBody extends Model
{
    /**
     * @var bool
     */
    public $registered;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'registered' => 'Registered',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registered) {
            $res['Registered'] = $this->registered;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckMailRegisteredResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Registered'])) {
            $model->registered = $map['Registered'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
