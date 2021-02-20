<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeSessionResponseBody\session;
use AlibabaCloud\Tea\Model;

class DescribeSessionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var session
     */
    public $session;
    protected $_name = [
        'requestId' => 'RequestId',
        'session'   => 'Session',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->session) {
            $res['Session'] = null !== $this->session ? $this->session->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Session'])) {
            $model->session = session::fromMap($map['Session']);
        }

        return $model;
    }
}
