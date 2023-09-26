<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiGroupRequest extends Model
{
    /**
     * @var string
     */
    public $compatibleFlags;

    /**
     * @var string
     */
    public $customTraceConfig;

    /**
     * @var string
     */
    public $defaultDomain;

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
    public $groupName;

    /**
     * @var string
     */
    public $passthroughHeaders;

    /**
     * @var string
     */
    public $rpcPattern;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $userLogConfig;
    protected $_name = [
        'compatibleFlags'    => 'CompatibleFlags',
        'customTraceConfig'  => 'CustomTraceConfig',
        'defaultDomain'      => 'DefaultDomain',
        'description'        => 'Description',
        'groupId'            => 'GroupId',
        'groupName'          => 'GroupName',
        'passthroughHeaders' => 'PassthroughHeaders',
        'rpcPattern'         => 'RpcPattern',
        'securityToken'      => 'SecurityToken',
        'userLogConfig'      => 'UserLogConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compatibleFlags) {
            $res['CompatibleFlags'] = $this->compatibleFlags;
        }
        if (null !== $this->customTraceConfig) {
            $res['CustomTraceConfig'] = $this->customTraceConfig;
        }
        if (null !== $this->defaultDomain) {
            $res['DefaultDomain'] = $this->defaultDomain;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->passthroughHeaders) {
            $res['PassthroughHeaders'] = $this->passthroughHeaders;
        }
        if (null !== $this->rpcPattern) {
            $res['RpcPattern'] = $this->rpcPattern;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->userLogConfig) {
            $res['UserLogConfig'] = $this->userLogConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompatibleFlags'])) {
            $model->compatibleFlags = $map['CompatibleFlags'];
        }
        if (isset($map['CustomTraceConfig'])) {
            $model->customTraceConfig = $map['CustomTraceConfig'];
        }
        if (isset($map['DefaultDomain'])) {
            $model->defaultDomain = $map['DefaultDomain'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['PassthroughHeaders'])) {
            $model->passthroughHeaders = $map['PassthroughHeaders'];
        }
        if (isset($map['RpcPattern'])) {
            $model->rpcPattern = $map['RpcPattern'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['UserLogConfig'])) {
            $model->userLogConfig = $map['UserLogConfig'];
        }

        return $model;
    }
}
