<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetSystemRequest\loginCredentials;

class ResetSystemRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var loginCredentials
     */
    public $loginCredentials;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'imageId'          => 'ImageId',
        'instanceId'       => 'InstanceId',
        'loginCredentials' => 'LoginCredentials',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->loginCredentials) {
            $this->loginCredentials->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->loginCredentials) {
            $res['LoginCredentials'] = null !== $this->loginCredentials ? $this->loginCredentials->toArray($noStream) : $this->loginCredentials;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LoginCredentials'])) {
            $model->loginCredentials = loginCredentials::fromMap($map['LoginCredentials']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
