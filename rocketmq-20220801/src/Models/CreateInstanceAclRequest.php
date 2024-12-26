<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceAclRequest extends Model
{
    /**
     * @description The type of operations that can be performed on the resource.
     *
     * The following types of operations are supported based on the resource type:
     *
     *   Topic: Pub, Sub, and Pub|Sub
     *   Consumer group: Sub
     *
     * Valid values:
     *
     *   SUB: subscribe
     *   Pub|Sub: publish and subscribe
     *   Pub: publish
     *
     * This parameter is required.
     * @example Pub
     *
     * @var string
     */
    public $actions;

    /**
     * @description The decision result of the authorization.
     *
     * Valid values:
     *
     *   Deny
     *   Allow
     *
     * This parameter is required.
     * @example Allow
     *
     * @var string
     */
    public $decision;

    /**
     * @description The IP address whitelists.
     *
     * @var string[]
     */
    public $ipWhitelists;

    /**
     * @description The name of the resource on which you want to grant permissions.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The type of the resource on which you want to grant permissions.
     *
     * Valid values:
     *
     *   Group
     *   Topic
     *
     * This parameter is required.
     * @example Topic
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'actions'      => 'actions',
        'decision'     => 'decision',
        'ipWhitelists' => 'ipWhitelists',
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = $this->actions;
        }
        if (null !== $this->decision) {
            $res['decision'] = $this->decision;
        }
        if (null !== $this->ipWhitelists) {
            $res['ipWhitelists'] = $this->ipWhitelists;
        }
        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            $model->actions = $map['actions'];
        }
        if (isset($map['decision'])) {
            $model->decision = $map['decision'];
        }
        if (isset($map['ipWhitelists'])) {
            if (!empty($map['ipWhitelists'])) {
                $model->ipWhitelists = $map['ipWhitelists'];
            }
        }
        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
