<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentSpaceRequest extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $cmsWorkspace;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $trajectoryStoreEnabled;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'cmsWorkspace' => 'cmsWorkspace',
        'description' => 'description',
        'trajectoryStoreEnabled' => 'trajectoryStoreEnabled',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->cmsWorkspace) {
            $res['cmsWorkspace'] = $this->cmsWorkspace;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->trajectoryStoreEnabled) {
            $res['trajectoryStoreEnabled'] = $this->trajectoryStoreEnabled;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['cmsWorkspace'])) {
            $model->cmsWorkspace = $map['cmsWorkspace'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['trajectoryStoreEnabled'])) {
            $model->trajectoryStoreEnabled = $map['trajectoryStoreEnabled'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
