<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveIpControlApisRequest extends Model
{
    /**
     * @description The ID of the API to be managed.
     *
     *   If this parameter is not specified, all APIs of the API group are unbound in the specified environment by default.
     *   The IDs of the APIs that you want to query. Separate multiple IDs with commas (,). A maximum of 100 IDs can be entered.
     *
     * @example 123
     *
     * @var string
     */
    public $apiIds;

    /**
     * @description The ID of the API group containing the API to be managed.
     *
     * @example 0009db9c828549768a200320714b8930
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the ACL.
     *
     * @example dd05f1c54d6749eda95f9fa6d491449a
     *
     * @var string
     */
    public $ipControlId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The name of the runtime environment. Valid values:
     *
     *   **RELEASE**
     *   **TEST**
     *
     * @example TEST
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiIds'        => 'ApiIds',
        'groupId'       => 'GroupId',
        'ipControlId'   => 'IpControlId',
        'securityToken' => 'SecurityToken',
        'stageName'     => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiIds) {
            $res['ApiIds'] = $this->apiIds;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
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
     * @return RemoveIpControlApisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiIds'])) {
            $model->apiIds = $map['ApiIds'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
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
