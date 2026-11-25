<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateWuyingServerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateWuyingServerRequest\modelConfig\serverRunConfig;

class modelConfig extends Model
{
    /**
     * @var string
     */
    public $modelAccessMethod;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $servedModelName;

    /**
     * @var serverRunConfig
     */
    public $serverRunConfig;
    protected $_name = [
        'modelAccessMethod' => 'ModelAccessMethod',
        'modelId' => 'ModelId',
        'servedModelName' => 'ServedModelName',
        'serverRunConfig' => 'ServerRunConfig',
    ];

    public function validate()
    {
        if (null !== $this->serverRunConfig) {
            $this->serverRunConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelAccessMethod) {
            $res['ModelAccessMethod'] = $this->modelAccessMethod;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->servedModelName) {
            $res['ServedModelName'] = $this->servedModelName;
        }

        if (null !== $this->serverRunConfig) {
            $res['ServerRunConfig'] = null !== $this->serverRunConfig ? $this->serverRunConfig->toArray($noStream) : $this->serverRunConfig;
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
        if (isset($map['ModelAccessMethod'])) {
            $model->modelAccessMethod = $map['ModelAccessMethod'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['ServedModelName'])) {
            $model->servedModelName = $map['ServedModelName'];
        }

        if (isset($map['ServerRunConfig'])) {
            $model->serverRunConfig = serverRunConfig::fromMap($map['ServerRunConfig']);
        }

        return $model;
    }
}
