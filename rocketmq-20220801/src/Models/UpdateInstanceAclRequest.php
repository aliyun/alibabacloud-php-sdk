<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceAclRequest extends Model
{
    /**
     * @example Pub
     *
     * @var string
     */
    public $actions;

    /**
     * @example Allow
     *
     * @var string
     */
    public $decision;

    /**
     * @var string[]
     */
    public $ipWhitelists;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description This parameter is required.
     *
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
     * @return UpdateInstanceAclRequest
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
