<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceSSLRequest extends Model
{
    /**
     * @var string
     */
    public $CAType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $SSLEnabled;

    /**
     * @var string
     */
    public $serverCert;

    /**
     * @var string
     */
    public $serverKey;
    protected $_name = [
        'CAType' => 'CAType',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
        'SSLEnabled' => 'SSLEnabled',
        'serverCert' => 'ServerCert',
        'serverKey' => 'ServerKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CAType) {
            $res['CAType'] = $this->CAType;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }

        if (null !== $this->serverCert) {
            $res['ServerCert'] = $this->serverCert;
        }

        if (null !== $this->serverKey) {
            $res['ServerKey'] = $this->serverKey;
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
        if (isset($map['CAType'])) {
            $model->CAType = $map['CAType'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }

        if (isset($map['ServerCert'])) {
            $model->serverCert = $map['ServerCert'];
        }

        if (isset($map['ServerKey'])) {
            $model->serverKey = $map['ServerKey'];
        }

        return $model;
    }
}
