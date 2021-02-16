<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterTDEResponseBody extends Model
{
    /**
     * @var string
     */
    public $TDEStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $encryptionKey;
    protected $_name = [
        'TDEStatus'     => 'TDEStatus',
        'requestId'     => 'RequestId',
        'DBClusterId'   => 'DBClusterId',
        'encryptionKey' => 'EncryptionKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterTDEResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }

        return $model;
    }
}
