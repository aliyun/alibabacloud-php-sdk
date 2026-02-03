<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ValidateConnectionRequest extends Model
{
    /**
     * @var string[]
     */
    public $configs;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var string
     */
    public $connectionType;

    /**
     * @var string[]
     */
    public $secrets;

    /**
     * @var string
     */
    public $validateType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'configs' => 'Configs',
        'connectionId' => 'ConnectionId',
        'connectionType' => 'ConnectionType',
        'secrets' => 'Secrets',
        'validateType' => 'ValidateType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        if (\is_array($this->secrets)) {
            Model::validateArray($this->secrets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['Configs'] = [];
                foreach ($this->configs as $key1 => $value1) {
                    $res['Configs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }

        if (null !== $this->secrets) {
            if (\is_array($this->secrets)) {
                $res['Secrets'] = [];
                foreach ($this->secrets as $key1 => $value1) {
                    $res['Secrets'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->validateType) {
            $res['ValidateType'] = $this->validateType;
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
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                foreach ($map['Configs'] as $key1 => $value1) {
                    $model->configs[$key1] = $value1;
                }
            }
        }

        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }

        if (isset($map['Secrets'])) {
            if (!empty($map['Secrets'])) {
                $model->secrets = [];
                foreach ($map['Secrets'] as $key1 => $value1) {
                    $model->secrets[$key1] = $value1;
                }
            }
        }

        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
