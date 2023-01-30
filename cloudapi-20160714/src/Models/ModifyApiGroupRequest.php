<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class ModifyApiGroupRequest extends Model
{
    /**
     * @description The API group description that you want to specify, which cannot exceed 180 characters. If this parameter is not specified, the group description is not modified.
     *
     * @example /eeee
     *
     * @var string
     */
    public $basePath;

    /**
     * @description The data of custom configuration items.
     *
     * @example depart:dep1
     *
     * @var string
     */
    public $compatibleFlags;

    /**
     * @description The list of associated tags. Separate multiple tags with commas (,).
     *
     * @example {\"parameterLocation\":\"HEADER\",\"parameterName\":\"traceId\"}
     *
     * @var string
     */
    public $customTraceConfig;

    /**
     * @description Specifies whether to pass headers.
     *
     * @example removeResponseServerHeader
     *
     * @var string
     */
    public $customerConfigs;

    /**
     * @description The RPC mode.
     *
     * @example mkt.api.gaore.com
     *
     * @var string
     */
    public $defaultDomain;

    /**
     * @description The user log configuration.
     *
     * @example New weather informations.
     *
     * @var string
     */
    public $description;

    /**
     * @description The API group name must be globally unique. The name must be 4 to 50 characters in length. It must start with a letter and can contain letters, digits, and underscores (\_). If this parameter is not specified, the group name is not modified.
     *
     * @example 523e8dc7bbe04613b5b1d726c2a7889d
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The root path of the API.
     *
     * @example NewWeather
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The default domain name.
     *
     * @example eagleeye-rpcid,x-b3-traceid,host
     *
     * @var string
     */
    public $passthroughHeaders;

    /**
     * @description The object tags that match the lifecycle rule. You can specify multiple tags.
     *
     * @var string
     */
    public $rpcPattern;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The tags that are attached to the resources.
     *
     * @example Key， Value
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The custom trace configuration.
     *
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
