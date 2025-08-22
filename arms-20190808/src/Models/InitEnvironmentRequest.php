<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class InitEnvironmentRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var bool
     */
    public $createAuthToken;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $managedType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliyunLang' => 'AliyunLang',
        'createAuthToken' => 'CreateAuthToken',
        'environmentId' => 'EnvironmentId',
        'managedType' => 'ManagedType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->createAuthToken) {
            $res['CreateAuthToken'] = $this->createAuthToken;
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->managedType) {
            $res['ManagedType'] = $this->managedType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['CreateAuthToken'])) {
            $model->createAuthToken = $map['CreateAuthToken'];
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['ManagedType'])) {
            $model->managedType = $map['ManagedType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
