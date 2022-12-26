<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeEmgUserAgreementResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $auth;

    /**
     * @example 768BB9F5-8AF3-557F-A489-9BDD64CB3E4C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'auth'      => 'Auth',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEmgUserAgreementResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
