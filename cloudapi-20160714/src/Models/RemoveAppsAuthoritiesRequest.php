<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveAppsAuthoritiesRequest extends Model
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
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $appIds;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'groupId'       => 'GroupId',
        'apiId'         => 'ApiId',
        'stageName'     => 'StageName',
        'appIds'        => 'AppIds',
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
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveAppsAuthoritiesRequest
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }

        return $model;
    }
}
