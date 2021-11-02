<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupClientsResponseBody;

use AlibabaCloud\Tea\Model;

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
    public $instanceId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientId'     => 'ClientId',
        'clientStatus' => 'ClientStatus',
        'instanceId'   => 'InstanceId',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
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
