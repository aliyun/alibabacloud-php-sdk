<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetApisAuthoritiesRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $apiIds;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $authValidTime;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'groupId'       => 'GroupId',
        'appId'         => 'AppId',
        'stageName'     => 'StageName',
        'apiIds'        => 'ApiIds',
        'description'   => 'Description',
        'authValidTime' => 'AuthValidTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->apiIds) {
            $res['ApiIds'] = $this->apiIds;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->authValidTime) {
            $res['AuthValidTime'] = $this->authValidTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetApisAuthoritiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['ApiIds'])) {
            $model->apiIds = $map['ApiIds'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AuthValidTime'])) {
            $model->authValidTime = $map['AuthValidTime'];
        }

        return $model;
    }
}
