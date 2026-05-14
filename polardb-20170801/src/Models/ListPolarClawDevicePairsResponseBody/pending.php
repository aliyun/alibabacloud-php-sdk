<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\ListPolarClawDevicePairsResponseBody;

use AlibabaCloud\Dara\Model;

class pending extends Model
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
     * @var bool
     */
    public $isRepair;

    /**
     * @var string
     */
    public $pairRequestId;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var string
     */
    public $remoteIp;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string[]
     */
    public $roles;

    /**
     * @var string[]
     */
    public $scopes;

    /**
     * @var bool
     */
    public $silent;

    /**
     * @var int
     */
    public $ts;
    protected $_name = [
        'clientId' => 'ClientId',
        'clientMode' => 'ClientMode',
        'deviceFamily' => 'DeviceFamily',
        'deviceId' => 'DeviceId',
        'displayName' => 'DisplayName',
        'isRepair' => 'IsRepair',
        'pairRequestId' => 'PairRequestId',
        'platform' => 'Platform',
        'publicKey' => 'PublicKey',
        'remoteIp' => 'RemoteIp',
        'role' => 'Role',
        'roles' => 'Roles',
        'scopes' => 'Scopes',
        'silent' => 'Silent',
        'ts' => 'Ts',
    ];

    public function validate()
    {
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
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

        if (null !== $this->deviceFamily) {
            $res['DeviceFamily'] = $this->deviceFamily;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->isRepair) {
            $res['IsRepair'] = $this->isRepair;
        }

        if (null !== $this->pairRequestId) {
            $res['PairRequestId'] = $this->pairRequestId;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }

        if (null !== $this->remoteIp) {
            $res['RemoteIp'] = $this->remoteIp;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['Roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['Roles'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->silent) {
            $res['Silent'] = $this->silent;
        }

        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
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

        if (isset($map['DeviceFamily'])) {
            $model->deviceFamily = $map['DeviceFamily'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['IsRepair'])) {
            $model->isRepair = $map['IsRepair'];
        }

        if (isset($map['PairRequestId'])) {
            $model->pairRequestId = $map['PairRequestId'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }

        if (isset($map['RemoteIp'])) {
            $model->remoteIp = $map['RemoteIp'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n1 = 0;
                foreach ($map['Roles'] as $item1) {
                    $model->roles[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Silent'])) {
            $model->silent = $map['Silent'];
        }

        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }

        return $model;
    }
}
