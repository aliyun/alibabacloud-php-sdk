<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\Connection\models;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\Connection\resourceMeta;

class Connection extends Model
{
    /**
     * @var string
     */
    public $accessibility;

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
    public $connectionName;

    /**
     * @var string
     */
    public $connectionType;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @var resourceMeta
     */
    public $resourceMeta;

    /**
     * @var string[]
     */
    public $secrets;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'configs' => 'Configs',
        'connectionId' => 'ConnectionId',
        'connectionName' => 'ConnectionName',
        'connectionType' => 'ConnectionType',
        'creator' => 'Creator',
        'description' => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'models' => 'Models',
        'resourceMeta' => 'ResourceMeta',
        'secrets' => 'Secrets',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        if (null !== $this->resourceMeta) {
            $this->resourceMeta->validate();
        }
        if (\is_array($this->secrets)) {
            Model::validateArray($this->secrets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

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

        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }

        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['Models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['Models'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceMeta) {
            $res['ResourceMeta'] = null !== $this->resourceMeta ? $this->resourceMeta->toArray($noStream) : $this->resourceMeta;
        }

        if (null !== $this->secrets) {
            if (\is_array($this->secrets)) {
                $res['Secrets'] = [];
                foreach ($this->secrets as $key1 => $value1) {
                    $res['Secrets'][$key1] = $value1;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

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

        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }

        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Models'])) {
            if (!empty($map['Models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['Models'] as $item1) {
                    $model->models[$n1++] = models::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceMeta'])) {
            $model->resourceMeta = resourceMeta::fromMap($map['ResourceMeta']);
        }

        if (isset($map['Secrets'])) {
            if (!empty($map['Secrets'])) {
                $model->secrets = [];
                foreach ($map['Secrets'] as $key1 => $value1) {
                    $model->secrets[$key1] = $value1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
