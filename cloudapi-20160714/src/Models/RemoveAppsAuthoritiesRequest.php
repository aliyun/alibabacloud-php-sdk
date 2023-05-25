<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveAppsAuthoritiesRequest extends Model
{
    /**
     * @description The IDs of applications. Separate multiple application IDs with commas (,). A maximum of 100 applications IDs can be entered.
     *
     * @example baacc592e63a4cb6a41920d9d3f91f38
     *
     * @var string
     */
    public $apiId;

    /**
     * @description *   This operation is intended for API providers and callers.
     *   Before you revoke access permissions, check by whom the permissions were granted. API providers can only revoke permissions granted by a Provider, and API callers can only revoke permissions granted by a Consumer.
     *
     * @example 2386789,3286798
     *
     * @var string
     */
    public $appIds;

    /**
     * @description The name of the runtime environment. Valid values:
     *
     *   **RELEASE**
     *   **TEST**
     *
     * @example 523e8dc7bbe04613b5b1d726c2a7889d
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the request.
     *
     * @example TEST
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiId'         => 'ApiId',
        'appIds'        => 'AppIds',
        'groupId'       => 'GroupId',
        'securityToken' => 'SecurityToken',
        'stageName'     => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
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

    /**
     * @param array $map
     *
     * @return RemoveAppsAuthoritiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
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
