<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreEncryptionRequest;

use AlibabaCloud\Tea\Model;

class userCmkInfo extends Model
{
    /**
     * @example f5136b95-2420-ab31-xxxxxxxxx
     *
     * @var string
     */
    public $keyId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example acs:ram::12344***:role/xxxxx
     *
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'keyId'    => 'keyId',
        'regionId' => 'regionId',
        'roleArn'  => 'roleArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['keyId'] = $this->keyId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userCmkInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keyId'])) {
            $model->keyId = $map['keyId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        return $model;
    }
}
