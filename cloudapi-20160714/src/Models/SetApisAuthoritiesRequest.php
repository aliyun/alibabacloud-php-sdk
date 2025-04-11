<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class SetApisAuthoritiesRequest extends Model
{
    /**
     * @var string
     */
    public $apiIds;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $authValidTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiIds' => 'ApiIds',
        'appId' => 'AppId',
        'authValidTime' => 'AuthValidTime',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'securityToken' => 'SecurityToken',
        'stageName' => 'StageName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiIds) {
            $res['ApiIds'] = $this->apiIds;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->authValidTime) {
            $res['AuthValidTime'] = $this->authValidTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['ApiIds'])) {
            $model->apiIds = $map['ApiIds'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AuthValidTime'])) {
            $model->authValidTime = $map['AuthValidTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
