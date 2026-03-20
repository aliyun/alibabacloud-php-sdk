<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class CheckRegionSupportBackupEncryptionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $supportBackupEncryption;
    protected $_name = [
        'requestId' => 'RequestId',
        'supportBackupEncryption' => 'SupportBackupEncryption',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportBackupEncryption) {
            $res['SupportBackupEncryption'] = $this->supportBackupEncryption;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SupportBackupEncryption'])) {
            $model->supportBackupEncryption = $map['SupportBackupEncryption'];
        }

        return $model;
    }
}
