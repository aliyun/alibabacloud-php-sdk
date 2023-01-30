<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateBackendRequest extends Model
{
    /**
     * @description The name of the backend service.
     *
     * @example testBackendService
     *
     * @var string
     */
    public $backendName;

    /**
     * @description The type of the backend service. Valid values: `HTTP, VPC, FC_EVENT, FC_HTTP, OSS, and MOCK`.
     *
     * @example HTTP
     *
     * @var string
     */
    public $backendType;

    /**
     * @description Specifies whether to create a role associated with EventBridge.
     *
     * @example true
     *
     * @var bool
     */
    public $createEventBridgeServiceLinkedRole;

    /**
     * @description The description of the backend service.
     *
     * @example HTTP backend
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'backendName'                        => 'BackendName',
        'backendType'                        => 'BackendType',
        'createEventBridgeServiceLinkedRole' => 'CreateEventBridgeServiceLinkedRole',
        'description'                        => 'Description',
        'securityToken'                      => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendName) {
            $res['BackendName'] = $this->backendName;
        }
        if (null !== $this->backendType) {
            $res['BackendType'] = $this->backendType;
        }
        if (null !== $this->createEventBridgeServiceLinkedRole) {
            $res['CreateEventBridgeServiceLinkedRole'] = $this->createEventBridgeServiceLinkedRole;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendName'])) {
            $model->backendName = $map['BackendName'];
        }
        if (isset($map['BackendType'])) {
            $model->backendType = $map['BackendType'];
        }
        if (isset($map['CreateEventBridgeServiceLinkedRole'])) {
            $model->createEventBridgeServiceLinkedRole = $map['CreateEventBridgeServiceLinkedRole'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
