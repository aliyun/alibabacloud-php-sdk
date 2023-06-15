<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEncryptionKeyResponseBody;

use AlibabaCloud\Tea\Model;

class encryptionKeyList extends Model
{
    /**
     * @description The alias of the key.
     *
     * @example alias/xxx
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The user who created the key.
     *
     * @example 1443*****9604
     *
     * @var string
     */
    public $creator;

    /**
     * @description The scheduled time at which the key is deleted. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-05-08T08:14:16Z
     *
     * @var string
     */
    public $deleteDate;

    /**
     * @description The description of the key.
     *
     * @example Description of the key
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the key.
     *
     * @example 5306d1b6-7fd3-42d9-9511-xxxxxxx
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The status of the key. Valid values:
     *
     *   Enabled
     *   Disabled
     *
     * @example Enabled
     *
     * @var string
     */
    public $encryptionKeyStatus;

    /**
     * @description The type of the key.
     *
     * @example ALIAS
     *
     * @var string
     */
    public $keyType;

    /**
     * @description The purpose of the key.
     *
     * @example ENCRYPT/DECRYPT
     *
     * @var string
     */
    public $keyUsage;

    /**
     * @description The time at which the key expires. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-10-18T08:14:16Z
     *
     * @var string
     */
    public $materialExpireTime;

    /**
     * @description The source of the key.
     *
     * @example Aliyun_KMS
     *
     * @var string
     */
    public $origin;

    /**
     * @description The role of the instance that uses the key. Valid values: ***master**: primary instance*. **slave**: read-only instance.
     *
     * @example master
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return encryptionKeyList
     */
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
