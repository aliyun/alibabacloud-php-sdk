<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceTDEInfoResponseBody extends Model
{
    /**
     * @description The custom key of the instance.
     *
     * The Bring Your Own Key (BYOK) feature allows you to manage and obtain your own encryption key. This feature is supported only in the following regions:
     *
     *   cn-hangzhou
     *   cn-shanghai
     *   cn-beijing
     *   cn-shenzhen
     *   cn-hongkong
     *   ap-southeast-1
     *   ap-southeast-3
     *
     * @example If the BYOK feature is supported, you can manage and obtain your own encryption key, and a custom key in the following format is returned: 2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx If the BYOK feature is not supported, you cannot obtain or manage your own encryption key, and the following string is returned: If not, you cannot manage and ontain the encryption key, and the system returns the NoActiveBYOK string.
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The encryption algorithm.
     *
     * @example aes-256-cbc
     *
     * @var string
     */
    public $encryptorName;

    /**
     * @description The request ID.
     *
     * @example F4DD0E29-361B-42F2-9301-B0048CCCE5D6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the Resource Access Management (RAM) role to which you want to grant permissions.
     *
     * @example acs:ram::123456789012****:role/aliyunrdsinstanceencryptiondefaultrole
     *
     * @var string
     */
    public $roleARN;

    /**
     * @description The TDE status. Valid values:
     *
     *   **enabled**
     *   **disabled**
     *
     * @example enabled
     *
     * @var string
     */
    public $TDEStatus;
    protected $_name = [
        'encryptionKey' => 'EncryptionKey',
        'encryptorName' => 'EncryptorName',
        'requestId'     => 'RequestId',
        'roleARN'       => 'RoleARN',
        'TDEStatus'     => 'TDEStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptorName) {
            $res['EncryptorName'] = $this->encryptorName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceTDEInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptorName'])) {
            $model->encryptorName = $map['EncryptorName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        return $model;
    }
}
