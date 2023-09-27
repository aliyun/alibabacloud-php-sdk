<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\Tea\Model;

class SetIpControlApisRequest extends Model
{
    /**
     * @var string
     */
    public $apiIds;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $ipControlId;

    /**
     * @var string
     */
    public $securityToken;

    /**
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
     * @return SetIpControlApisRequest
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
