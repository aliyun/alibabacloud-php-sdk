<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\ListPolarClawDevicePairsResponseBody;

use AlibabaCloud\Dara\Model;

class paired extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientMode;

    /**
     * @var int
     */
    public $createdAtMs;

    /**
     * @var string
     */
    public $deviceFamily;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $lastSeenAtMs;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string[]
     */
    public $scopes;
    protected $_name = [
        'clientId' => 'ClientId',
        'clientMode' => 'ClientMode',
        'createdAtMs' => 'CreatedAtMs',
        'deviceFamily' => 'DeviceFamily',
        'deviceId' => 'DeviceId',
        'displayName' => 'DisplayName',
        'lastSeenAtMs' => 'LastSeenAtMs',
        'platform' => 'Platform',
        'role' => 'Role',
        'scopes' => 'Scopes',
    ];

    public function validate()
    {
        if (\is_array($this->scopes)) {
            Model::validateArray($this->scopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientMode) {
            $res['ClientMode'] = $this->clientMode;
        }

        if (null !== $this->createdAtMs) {
            $res['CreatedAtMs'] = $this->createdAtMs;
        }

        if (null !== $this->deviceFamily) {
            $res['DeviceFamily'] = $this->deviceFamily;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->lastSeenAtMs) {
            $res['LastSeenAtMs'] = $this->lastSeenAtMs;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->scopes) {
            if (\is_array($this->scopes)) {
                $res['Scopes'] = [];
                $n1 = 0;
                foreach ($this->scopes as $item1) {
                    $res['Scopes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ClientMode'])) {
            $model->clientMode = $map['ClientMode'];
        }

        if (isset($map['CreatedAtMs'])) {
            $model->createdAtMs = $map['CreatedAtMs'];
        }

        if (isset($map['DeviceFamily'])) {
            $model->deviceFamily = $map['DeviceFamily'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['LastSeenAtMs'])) {
            $model->lastSeenAtMs = $map['LastSeenAtMs'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Scopes'])) {
            if (!empty($map['Scopes'])) {
                $model->scopes = [];
                $n1 = 0;
                foreach ($map['Scopes'] as $item1) {
                    $model->scopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
