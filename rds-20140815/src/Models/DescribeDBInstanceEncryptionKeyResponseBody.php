<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEncryptionKeyResponseBody\encryptionKeyList;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceEncryptionKeyResponseBody extends Model
{
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
     * @description An array that consists of keys.
     *
     * @var encryptionKeyList[]
     */
    public $encryptionKeyList;

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
     * @description The ID of the request.
     *
     * @example 3BC2768E-DEDA-40FC-BBE9-6B884F3626AF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'creator'             => 'Creator',
        'deleteDate'          => 'DeleteDate',
        'description'         => 'Description',
        'encryptionKey'       => 'EncryptionKey',
        'encryptionKeyList'   => 'EncryptionKeyList',
        'encryptionKeyStatus' => 'EncryptionKeyStatus',
        'keyUsage'            => 'KeyUsage',
        'materialExpireTime'  => 'MaterialExpireTime',
        'origin'              => 'Origin',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->encryptionKeyList) {
            $res['EncryptionKeyList'] = [];
            if (null !== $this->encryptionKeyList && \is_array($this->encryptionKeyList)) {
                $n = 0;
                foreach ($this->encryptionKeyList as $item) {
                    $res['EncryptionKeyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->encryptionKeyStatus) {
            $res['EncryptionKeyStatus'] = $this->encryptionKeyStatus;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceEncryptionKeyResponseBody
     */
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
        if (isset($map['EncryptionKeyList'])) {
            if (!empty($map['EncryptionKeyList'])) {
                $model->encryptionKeyList = [];
                $n                        = 0;
                foreach ($map['EncryptionKeyList'] as $item) {
                    $model->encryptionKeyList[$n++] = null !== $item ? encryptionKeyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EncryptionKeyStatus'])) {
            $model->encryptionKeyStatus = $map['EncryptionKeyStatus'];
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

        return $model;
    }
}
