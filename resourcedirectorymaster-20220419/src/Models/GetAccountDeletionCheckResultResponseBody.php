<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionCheckResultResponseBody\accountDeletionCheckResultInfo;
use AlibabaCloud\Tea\Model;

class GetAccountDeletionCheckResultResponseBody extends Model
{
    /**
     * @var accountDeletionCheckResultInfo
     */
    public $accountDeletionCheckResultInfo;

    /**
     * @example 54AC391D-4F7F-5F08-B8D3-0AECDE6EC5BD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountDeletionCheckResultInfo' => 'AccountDeletionCheckResultInfo',
        'requestId'                      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDeletionCheckResultInfo) {
            $res['AccountDeletionCheckResultInfo'] = null !== $this->accountDeletionCheckResultInfo ? $this->accountDeletionCheckResultInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountDeletionCheckResultResponseBody
     */
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
