<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAclResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string[]
     */
    public $actions;

    /**
     * @var string
     */
    public $decision;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $ipWhitelists;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'aclType' => 'aclType',
        'actions' => 'actions',
        'decision' => 'decision',
        'instanceId' => 'instanceId',
        'ipWhitelists' => 'ipWhitelists',
        'regionId' => 'regionId',
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
        'username' => 'username',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        if (\is_array($this->ipWhitelists)) {
            Model::validateArray($this->ipWhitelists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['aclType'] = $this->aclType;
        }

        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['actions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->decision) {
            $res['decision'] = $this->decision;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->ipWhitelists) {
            if (\is_array($this->ipWhitelists)) {
                $res['ipWhitelists'] = [];
                $n1 = 0;
                foreach ($this->ipWhitelists as $item1) {
                    $res['ipWhitelists'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
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
        if (isset($map['aclType'])) {
            $model->aclType = $map['aclType'];
        }

        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['actions'] as $item1) {
                    $model->actions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['decision'])) {
            $model->decision = $map['decision'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['ipWhitelists'])) {
            if (!empty($map['ipWhitelists'])) {
                $model->ipWhitelists = [];
                $n1 = 0;
                foreach ($map['ipWhitelists'] as $item1) {
                    $model->ipWhitelists[$n1++] = $item1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
