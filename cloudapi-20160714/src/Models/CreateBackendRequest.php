<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateBackendRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateBackendRequest extends Model
{
    /**
     * @description The name of the backend service.
     *
     * This parameter is required.
     * @example testBackendService
     *
     * @var string
     */
    public $backendName;

    /**
     * @description The type of the backend service.
     *
     * This parameter is required.
     * @example HTTP
     *
     * @var string
     */
    public $backendType;

    /**
     * @description Specifies to create a EventBridge service-linked role.
     *
     * @example true
     *
     * @var bool
     */
    public $createEventBridgeServiceLinkedRole;

    /**
     * @description Specifies to create a service-linked role.
     *
     * @example true
     *
     * @var bool
     */
    public $createSlr;

    /**
     * @description The description.
     *
     * @example release data api 411055691504981
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The tag of objects that match the rule. You can specify multiple tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'backendName'                        => 'BackendName',
        'backendType'                        => 'BackendType',
        'createEventBridgeServiceLinkedRole' => 'CreateEventBridgeServiceLinkedRole',
        'createSlr'                          => 'CreateSlr',
        'description'                        => 'Description',
        'securityToken'                      => 'SecurityToken',
        'tag'                                => 'Tag',
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
        if (null !== $this->createSlr) {
            $res['CreateSlr'] = $this->createSlr;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['CreateSlr'])) {
            $model->createSlr = $map['CreateSlr'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
