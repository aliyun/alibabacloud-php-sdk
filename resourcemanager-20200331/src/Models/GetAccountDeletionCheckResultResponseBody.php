<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultResponseBody\accountDeletionCheckResultInfo;

class GetAccountDeletionCheckResultResponseBody extends Model
{
    /**
     * @var accountDeletionCheckResultInfo
     */
    public $accountDeletionCheckResultInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountDeletionCheckResultInfo' => 'AccountDeletionCheckResultInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accountDeletionCheckResultInfo) {
            $this->accountDeletionCheckResultInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountDeletionCheckResultInfo) {
            $res['AccountDeletionCheckResultInfo'] = null !== $this->accountDeletionCheckResultInfo ? $this->accountDeletionCheckResultInfo->toArray($noStream) : $this->accountDeletionCheckResultInfo;
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
        if (isset($map['AccountDeletionCheckResultInfo'])) {
            $model->accountDeletionCheckResultInfo = accountDeletionCheckResultInfo::fromMap($map['AccountDeletionCheckResultInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
