<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreEncryptionRequest;

use AlibabaCloud\Dara\Model;

class userCmkInfo extends Model
{
    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'keyId' => 'keyId',
        'regionId' => 'regionId',
        'roleArn' => 'roleArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
