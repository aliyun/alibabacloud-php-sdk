<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDEResponseBody\databases;

class DescribeDBInstanceTDEResponseBody extends Model
{
    /**
     * @var databases
     */
    public $databases;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $TDEMode;

    /**
     * @var string
     */
    public $TDEStatus;
    protected $_name = [
        'databases' => 'Databases',
        'encryptionKey' => 'EncryptionKey',
        'requestId' => 'RequestId',
        'TDEMode' => 'TDEMode',
        'TDEStatus' => 'TDEStatus',
    ];

    public function validate()
    {
        if (null !== $this->databases) {
            $this->databases->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = null !== $this->databases ? $this->databases->toArray($noStream) : $this->databases;
        }

        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->TDEMode) {
            $res['TDEMode'] = $this->TDEMode;
        }

        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
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
        if (isset($map['Databases'])) {
            $model->databases = databases::fromMap($map['Databases']);
        }

        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TDEMode'])) {
            $model->TDEMode = $map['TDEMode'];
        }

        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        return $model;
    }
}
