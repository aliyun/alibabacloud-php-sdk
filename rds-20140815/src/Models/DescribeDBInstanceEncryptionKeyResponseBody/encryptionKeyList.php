<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEncryptionKeyResponseBody;

use AlibabaCloud\Dara\Model;

class encryptionKeyList extends Model
{
    /**
     * @var string
     */
    public $aliasName;
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
    public $keyType;
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
    public $usedBy;
    protected $_name = [
        'aliasName'           => 'AliasName',
        'creator'             => 'Creator',
        'deleteDate'          => 'DeleteDate',
        'description'         => 'Description',
        'encryptionKey'       => 'EncryptionKey',
        'encryptionKeyStatus' => 'EncryptionKeyStatus',
        'keyType'             => 'KeyType',
        'keyUsage'            => 'KeyUsage',
        'materialExpireTime'  => 'MaterialExpireTime',
        'origin'              => 'Origin',
        'usedBy'              => 'UsedBy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

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

        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
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

        if (null !== $this->usedBy) {
            $res['UsedBy'] = $this->usedBy;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

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

        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
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

        if (isset($map['UsedBy'])) {
            $model->usedBy = $map['UsedBy'];
        }

        return $model;
    }
}
