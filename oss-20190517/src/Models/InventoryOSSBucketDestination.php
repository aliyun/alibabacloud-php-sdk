<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InventoryOSSBucketDestination extends Model
{
    /**
     * @description The account ID granted by the bucket owner
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The bucket that stores the exported inventory list
     *
     * @var string
     */
    public $bucket;

    /**
     * @var InventoryEncryption
     */
    public $encryption;

    /**
     * @var string
     */
    public $format;

    /**
     * @description The path of the exported inventory list
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The name of the role to which the bucket owner grants permissions
     *
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'accountId'  => 'AccountId',
        'bucket'     => 'Bucket',
        'encryption' => 'Encryption',
        'format'     => 'Format',
        'prefix'     => 'Prefix',
        'roleArn'    => 'RoleArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = null !== $this->encryption ? $this->encryption->toMap() : null;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InventoryOSSBucketDestination
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = InventoryEncryption::fromMap($map['Encryption']);
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}
