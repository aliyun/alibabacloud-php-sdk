<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class DescribeEncryptionKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $deleteDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $encryptionKeyStatus;

    /**
     * @var string
     */
    public $encryptionName;

    /**
     * @var string
     */
    public $keyUsage;

    /**
     * @var string
     */
    public $materialExpireTime;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'creator' => 'Creator',
        'deleteDate' => 'DeleteDate',
        'description' => 'Description',
        'encryptionKey' => 'EncryptionKey',
        'encryptionKeyStatus' => 'EncryptionKeyStatus',
        'encryptionName' => 'EncryptionName',
        'keyUsage' => 'KeyUsage',
        'materialExpireTime' => 'MaterialExpireTime',
        'origin' => 'Origin',
        'requestId' => 'RequestId',
        'roleArn' => 'RoleArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }

        if (null !== $this->encryptionKeyStatus) {
            $res['EncryptionKeyStatus'] = $this->encryptionKeyStatus;
        }

        if (null !== $this->encryptionName) {
            $res['EncryptionName'] = $this->encryptionName;
        }

        if (null !== $this->keyUsage) {
            $res['KeyUsage'] = $this->keyUsage;
        }

        if (null !== $this->materialExpireTime) {
            $res['MaterialExpireTime'] = $this->materialExpireTime;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }

        if (isset($map['EncryptionKeyStatus'])) {
            $model->encryptionKeyStatus = $map['EncryptionKeyStatus'];
        }

        if (isset($map['EncryptionName'])) {
            $model->encryptionName = $map['EncryptionName'];
        }

        if (isset($map['KeyUsage'])) {
            $model->keyUsage = $map['KeyUsage'];
        }

        if (isset($map['MaterialExpireTime'])) {
            $model->materialExpireTime = $map['MaterialExpireTime'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}
