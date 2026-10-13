<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class UpdateContextDatabaseSyncConnectionCredentialRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var mixed[]
     */
    public $credentials;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'connectionId' => 'ConnectionId',
        'credentials' => 'Credentials',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->credentials)) {
            Model::validateArray($this->credentials);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        if (null !== $this->credentials) {
            if (\is_array($this->credentials)) {
                $res['Credentials'] = [];
                foreach ($this->credentials as $key1 => $value1) {
                    $res['Credentials'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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

        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        if (isset($map['Credentials'])) {
            if (!empty($map['Credentials'])) {
                $model->credentials = [];
                foreach ($map['Credentials'] as $key1 => $value1) {
                    $model->credentials[$key1] = $value1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
