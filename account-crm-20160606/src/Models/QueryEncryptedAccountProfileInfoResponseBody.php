<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEncryptedAccountProfileInfoResponseBody\encryptedProfileInfo;

class QueryEncryptedAccountProfileInfoResponseBody extends Model
{
    /**
     * @var encryptedProfileInfo
     */
    public $encryptedProfileInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'encryptedProfileInfo' => 'EncryptedProfileInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->encryptedProfileInfo) {
            $this->encryptedProfileInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptedProfileInfo) {
            $res['EncryptedProfileInfo'] = null !== $this->encryptedProfileInfo ? $this->encryptedProfileInfo->toArray($noStream) : $this->encryptedProfileInfo;
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
        if (isset($map['EncryptedProfileInfo'])) {
            $model->encryptedProfileInfo = encryptedProfileInfo::fromMap($map['EncryptedProfileInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
