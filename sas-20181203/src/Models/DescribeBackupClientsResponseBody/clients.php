<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupClientsResponseBody;

use AlibabaCloud\Tea\Model;

class clients extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $clientStatus;

    /**
     * @var string
     */
    public $clientId;
    protected $_name = [
        'uuid'         => 'Uuid',
        'instanceId'   => 'InstanceId',
        'clientStatus' => 'ClientStatus',
        'clientId'     => 'ClientId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clients
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        return $model;
    }
}
