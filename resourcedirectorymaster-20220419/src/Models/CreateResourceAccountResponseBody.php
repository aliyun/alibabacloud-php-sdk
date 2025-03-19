<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateResourceAccountResponseBody\account;
use AlibabaCloud\Tea\Model;

class CreateResourceAccountResponseBody extends Model
{
    /**
     * @description The information of the member.
     *
     * @var account
     */
    public $account;

    /**
     * @description The ID of the request.
     *
     * @example B356A415-D860-43E5-865A-E2193D62BBD6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'account' => 'Account',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = null !== $this->account ? $this->account->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = account::fromMap($map['Account']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
