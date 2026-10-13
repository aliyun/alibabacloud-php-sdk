<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class UpdateContextDatabaseSyncSourceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $sourceConfig;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'name' => 'Name',
        'sourceConfig' => 'SourceConfig',
        'sourceId' => 'SourceId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->sourceConfig)) {
            Model::validateArray($this->sourceConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sourceConfig) {
            if (\is_array($this->sourceConfig)) {
                $res['SourceConfig'] = [];
                foreach ($this->sourceConfig as $key1 => $value1) {
                    $res['SourceConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SourceConfig'])) {
            if (!empty($map['SourceConfig'])) {
                $model->sourceConfig = [];
                foreach ($map['SourceConfig'] as $key1 => $value1) {
                    $model->sourceConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
