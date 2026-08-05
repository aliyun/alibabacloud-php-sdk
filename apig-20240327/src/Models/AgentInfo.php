<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AgentInfo\agentAccess;
use AlibabaCloud\SDK\APIG\V20240327\Models\AgentInfo\modelAccess;

class AgentInfo extends Model
{
    /**
     * @var agentAccess
     */
    public $agentAccess;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string[]
     */
    public $allowedCapabilities;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var modelAccess
     */
    public $modelAccess;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'agentAccess' => 'agentAccess',
        'agentId' => 'agentId',
        'agentType' => 'agentType',
        'allowedCapabilities' => 'allowedCapabilities',
        'createTimestamp' => 'createTimestamp',
        'description' => 'description',
        'gatewayId' => 'gatewayId',
        'modelAccess' => 'modelAccess',
        'name' => 'name',
        'resourceGroupId' => 'resourceGroupId',
        'status' => 'status',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->agentAccess) {
            $this->agentAccess->validate();
        }
        if (\is_array($this->allowedCapabilities)) {
            Model::validateArray($this->allowedCapabilities);
        }
        if (null !== $this->modelAccess) {
            $this->modelAccess->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentAccess) {
            $res['agentAccess'] = null !== $this->agentAccess ? $this->agentAccess->toArray($noStream) : $this->agentAccess;
        }

        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->agentType) {
            $res['agentType'] = $this->agentType;
        }

        if (null !== $this->allowedCapabilities) {
            if (\is_array($this->allowedCapabilities)) {
                $res['allowedCapabilities'] = [];
                $n1 = 0;
                foreach ($this->allowedCapabilities as $item1) {
                    $res['allowedCapabilities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->modelAccess) {
            $res['modelAccess'] = null !== $this->modelAccess ? $this->modelAccess->toArray($noStream) : $this->modelAccess;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['agentAccess'])) {
            $model->agentAccess = agentAccess::fromMap($map['agentAccess']);
        }

        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['agentType'])) {
            $model->agentType = $map['agentType'];
        }

        if (isset($map['allowedCapabilities'])) {
            if (!empty($map['allowedCapabilities'])) {
                $model->allowedCapabilities = [];
                $n1 = 0;
                foreach ($map['allowedCapabilities'] as $item1) {
                    $model->allowedCapabilities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['modelAccess'])) {
            $model->modelAccess = modelAccess::fromMap($map['modelAccess']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
