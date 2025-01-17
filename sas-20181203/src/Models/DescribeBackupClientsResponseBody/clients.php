<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupClientsResponseBody;

use AlibabaCloud\Dara\Model;

class clients extends Model
{
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $clientStatus;
    /**
     * @var string
     */
    public $clientVersion;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientId'      => 'ClientId',
        'clientStatus'  => 'ClientStatus',
        'clientVersion' => 'ClientVersion',
        'instanceId'    => 'InstanceId',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }

        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }

        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
