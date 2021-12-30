<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateHostShareKeyRequest extends Model
{
    /**
     * @var string
     */
    public $hostShareKeyName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $passPhrase;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostShareKeyName' => 'HostShareKeyName',
        'instanceId'       => 'InstanceId',
        'passPhrase'       => 'PassPhrase',
        'privateKey'       => 'PrivateKey',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostShareKeyName) {
            $res['HostShareKeyName'] = $this->hostShareKeyName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->passPhrase) {
            $res['PassPhrase'] = $this->passPhrase;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHostShareKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostShareKeyName'])) {
            $model->hostShareKeyName = $map['HostShareKeyName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PassPhrase'])) {
            $model->passPhrase = $map['PassPhrase'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
