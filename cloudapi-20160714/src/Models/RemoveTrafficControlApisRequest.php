<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveTrafficControlApisRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 3b81fd160f5645e097cc8855d75a1cf6,46fbb52840d146f186e38e8e70fc8c12
     *
     * @var string
     */
    public $apiIds;

    /**
     * @description The name of the runtime environment. Valid values:
     *
     *   **RELEASE**
     *   **TEST**
     *
     * @example 0009db9c828549768a200320714b8930
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description *   This API is intended for API providers.
     *   This API allows you to unbind a specified throttling policy from up to 100 APIs at a time.
     *
     * @example TEST
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The IDs of the APIs from which you want to unbind a specified throttling policy.
     *
     *   If this parameter is not specified, the throttling policy is unbound from all the APIs in the specified environment of the API group.
     *   Separate multiple API IDs with commas (,). A maximum of 100 API IDs can be entered.
     *
     * @example dd05f1c54d6749eda95f9fa6d491449a
     *
     * @var string
     */
    public $trafficControlId;
    protected $_name = [
        'apiIds'           => 'ApiIds',
        'groupId'          => 'GroupId',
        'securityToken'    => 'SecurityToken',
        'stageName'        => 'StageName',
        'trafficControlId' => 'TrafficControlId',
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveTrafficControlApisRequest
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }

        return $model;
    }
}
