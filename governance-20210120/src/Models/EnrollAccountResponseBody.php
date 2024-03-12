<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Tea\Model;

class EnrollAccountResponseBody extends Model
{
    /**
     * @description The account ID.
     *
     * @example 143165363236****
     *
     * @var int
     */
    public $accountUid;

    /**
     * @description The request ID.
     *
     * @example 7071E5FA-515E-5F53-B335-B87D619C6A66
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountUid' => 'AccountUid',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnrollAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
