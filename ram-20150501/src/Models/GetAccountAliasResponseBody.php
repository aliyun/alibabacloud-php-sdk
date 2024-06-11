<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class GetAccountAliasResponseBody extends Model
{
    /**
     * @description The alias of the Alibaba Cloud account.
     *
     * @example myalias
     *
     * @var string
     */
    public $accountAlias;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountAlias' => 'AccountAlias',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountAlias) {
            $res['AccountAlias'] = $this->accountAlias;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountAliasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountAlias'])) {
            $model->accountAlias = $map['AccountAlias'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
