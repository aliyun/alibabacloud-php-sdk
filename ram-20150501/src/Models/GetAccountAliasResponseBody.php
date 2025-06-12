<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Dara\Model;

class GetAccountAliasResponseBody extends Model
{
    /**
     * @var string
     */
    public $accountAlias;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountAlias' => 'AccountAlias',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
