<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupClientsResponseBody;

use AlibabaCloud\Tea\Model;

class clients extends Model
{
    /**
     * @description The ID of the anti-ransomware agent.
     *
     * @example c-000az2f537r73dyh****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The status of the anti-ransomware agent.
     *
     * Valid values:
     *
     *   **INSTALLING**: The agent is being installed.
     *   **ONLINE**: The agent is online.
     *   **UNINSTALLING**: The agent is being uninstalled.
     *   **NOT_INSTALLED**: The agent is not installed.
     *   **ACTIVATED**: The agent is enabled.
     *   **CLIENT_CONNECTION_ERROR**: A connection error occurs on the agent.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @description The version of the anti-ransomware agent.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The ID of the ECS instance on which the anti-ransomware agent is installed.
     *
     * @example i-bp15hyph4aci99dv****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The UUID of the Elastic Compute Service (ECS) instance on which the anti-ransomware agent is installed.
     *
     * @example 22f6550d-f294-449b-b6e6-90638fd1****
     *
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
