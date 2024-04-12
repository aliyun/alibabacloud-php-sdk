<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetDatabaseAccountResponseBody\databaseAccount;
use AlibabaCloud\Tea\Model;

class GetDatabaseAccountResponseBody extends Model
{
    /**
     * @var databaseAccount
     */
    public $databaseAccount;

    /**
     * @example FA06D274-8D0A-59FB-8B7E-584C0EEBBFFF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'databaseAccount' => 'DatabaseAccount',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseAccount) {
            $res['DatabaseAccount'] = null !== $this->databaseAccount ? $this->databaseAccount->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatabaseAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseAccount'])) {
            $model->databaseAccount = databaseAccount::fromMap($map['DatabaseAccount']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
