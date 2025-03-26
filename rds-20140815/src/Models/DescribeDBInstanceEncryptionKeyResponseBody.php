<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEncryptionKeyResponseBody\encryptionKeyList;

class DescribeDBInstanceEncryptionKeyResponseBody extends Model
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
     * @var encryptionKeyList[]
     */
    public $encryptionKeyList;

    /**
     * @var string
     */
    public $encryptionKeyStatus;

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
    protected $_name = [
        'creator' => 'Creator',
        'deleteDate' => 'DeleteDate',
        'description' => 'Description',
        'encryptionKey' => 'EncryptionKey',
        'encryptionKeyList' => 'EncryptionKeyList',
        'encryptionKeyStatus' => 'EncryptionKeyStatus',
        'keyUsage' => 'KeyUsage',
        'materialExpireTime' => 'MaterialExpireTime',
        'origin' => 'Origin',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->encryptionKeyList)) {
            Model::validateArray($this->encryptionKeyList);
        }
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

        if (null !== $this->encryptionKeyList) {
            if (\is_array($this->encryptionKeyList)) {
                $res['EncryptionKeyList'] = [];
                $n1 = 0;
                foreach ($this->encryptionKeyList as $item1) {
                    $res['EncryptionKeyList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['EncryptionKeyList'])) {
            if (!empty($map['EncryptionKeyList'])) {
                $model->encryptionKeyList = [];
                $n1 = 0;
                foreach ($map['EncryptionKeyList'] as $item1) {
                    $model->encryptionKeyList[$n1++] = encryptionKeyList::fromMap($item1);
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
