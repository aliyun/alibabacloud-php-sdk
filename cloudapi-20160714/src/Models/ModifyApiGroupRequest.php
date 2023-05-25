<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class ModifyApiGroupRequest extends Model
{
    /**
     * @example /eeee
     *
     * @var string
     */
    public $basePath;

    /**
     * @example depart:dep1
     *
     * @var string
     */
    public $compatibleFlags;

    /**
     * @example {\"parameterLocation\":\"HEADER\",\"parameterName\":\"traceId\"}
     *
     * @var string
     */
    public $customTraceConfig;

    /**
     * @example removeResponseServerHeader
     *
     * @var string
     */
    public $customerConfigs;

    /**
     * @example mkt.api.gaore.com
     *
     * @var string
     */
    public $defaultDomain;

    /**
     * @example New weather informations.
     *
     * @var string
     */
    public $description;

    /**
     * @example 523e8dc7bbe04613b5b1d726c2a7889d
     *
     * @var string
     */
    public $groupId;

    /**
     * @example NewWeather
     *
     * @var string
     */
    public $groupName;

    /**
     * @example eagleeye-rpcid,x-b3-traceid,host
     *
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
     * @example Key， Value
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @example {\"requestBody\":false,\"responseBody\":false,\"queryString\":\"\",\"requestHeaders\":\"\",\"responseHeaders\":\"\",\"jwtClaims\":\"\"}
     *
     * @var string
     */
    public $userLogConfig;
    protected $_name = [
        'basePath'           => 'BasePath',
        'compatibleFlags'    => 'CompatibleFlags',
        'customTraceConfig'  => 'CustomTraceConfig',
        'customerConfigs'    => 'CustomerConfigs',
        'defaultDomain'      => 'DefaultDomain',
        'description'        => 'Description',
        'groupId'            => 'GroupId',
        'groupName'          => 'GroupName',
        'passthroughHeaders' => 'PassthroughHeaders',
        'rpcPattern'         => 'RpcPattern',
        'securityToken'      => 'SecurityToken',
        'tag'                => 'Tag',
        'userLogConfig'      => 'UserLogConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['BasePath'] = $this->basePath;
        }
        if (null !== $this->compatibleFlags) {
            $res['CompatibleFlags'] = $this->compatibleFlags;
        }
        if (null !== $this->customTraceConfig) {
            $res['CustomTraceConfig'] = $this->customTraceConfig;
        }
        if (null !== $this->customerConfigs) {
            $res['CustomerConfigs'] = $this->customerConfigs;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['BasePath'])) {
            $model->basePath = $map['BasePath'];
        }
        if (isset($map['CompatibleFlags'])) {
            $model->compatibleFlags = $map['CompatibleFlags'];
        }
        if (isset($map['CustomTraceConfig'])) {
            $model->customTraceConfig = $map['CustomTraceConfig'];
        }
        if (isset($map['CustomerConfigs'])) {
            $model->customerConfigs = $map['CustomerConfigs'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserLogConfig'])) {
            $model->userLogConfig = $map['UserLogConfig'];
        }

        return $model;
    }
}
