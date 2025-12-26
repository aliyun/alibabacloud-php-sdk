<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseRequest\autoUpdateConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseRequest\metaDataConfig;

class UpdateKnowledgeBaseRequest extends Model
{
    /**
     * @var autoUpdateConfig
     */
    public $autoUpdateConfig;

    /**
     * @var bool
     */
    public $bindRuntime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var metaDataConfig
     */
    public $metaDataConfig;

    /**
     * @var string
     */
    public $runtimeId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'autoUpdateConfig' => 'AutoUpdateConfig',
        'bindRuntime' => 'BindRuntime',
        'description' => 'Description',
        'metaDataConfig' => 'MetaDataConfig',
        'runtimeId' => 'RuntimeId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->autoUpdateConfig) {
            $this->autoUpdateConfig->validate();
        }
        if (null !== $this->metaDataConfig) {
            $this->metaDataConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoUpdateConfig) {
            $res['AutoUpdateConfig'] = null !== $this->autoUpdateConfig ? $this->autoUpdateConfig->toArray($noStream) : $this->autoUpdateConfig;
        }

        if (null !== $this->bindRuntime) {
            $res['BindRuntime'] = $this->bindRuntime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->metaDataConfig) {
            $res['MetaDataConfig'] = null !== $this->metaDataConfig ? $this->metaDataConfig->toArray($noStream) : $this->metaDataConfig;
        }

        if (null !== $this->runtimeId) {
            $res['RuntimeId'] = $this->runtimeId;
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
        if (isset($map['AutoUpdateConfig'])) {
            $model->autoUpdateConfig = autoUpdateConfig::fromMap($map['AutoUpdateConfig']);
        }

        if (isset($map['BindRuntime'])) {
            $model->bindRuntime = $map['BindRuntime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MetaDataConfig'])) {
            $model->metaDataConfig = metaDataConfig::fromMap($map['MetaDataConfig']);
        }

        if (isset($map['RuntimeId'])) {
            $model->runtimeId = $map['RuntimeId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
