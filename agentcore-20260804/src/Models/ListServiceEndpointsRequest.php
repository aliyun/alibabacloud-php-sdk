<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class ListServiceEndpointsRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $collaborationComponent;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceBindingId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'agentId' => 'agentId',
        'agentVersion' => 'agentVersion',
        'collaborationComponent' => 'collaborationComponent',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'resourceBindingId' => 'resourceBindingId',
        'status' => 'status',
        'targetType' => 'targetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->agentVersion) {
            $res['agentVersion'] = $this->agentVersion;
        }

        if (null !== $this->collaborationComponent) {
            $res['collaborationComponent'] = $this->collaborationComponent;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceBindingId) {
            $res['resourceBindingId'] = $this->resourceBindingId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['agentVersion'])) {
            $model->agentVersion = $map['agentVersion'];
        }

        if (isset($map['collaborationComponent'])) {
            $model->collaborationComponent = $map['collaborationComponent'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['resourceBindingId'])) {
            $model->resourceBindingId = $map['resourceBindingId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
