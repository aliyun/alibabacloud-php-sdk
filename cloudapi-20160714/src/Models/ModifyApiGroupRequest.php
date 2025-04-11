<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupRequest\tag;

class ModifyApiGroupRequest extends Model
{
    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string
     */
    public $compatibleFlags;

    /**
     * @var string
     */
    public $customAppCodeConfig;

    /**
     * @var string
     */
    public $customTraceConfig;

    /**
     * @var string
     */
    public $customerConfigs;

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
    public $filterAppCodeForBackend;

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
    public $rpsLimitForServerless;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $supportSSE;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $userLogConfig;
    protected $_name = [
        'basePath' => 'BasePath',
        'compatibleFlags' => 'CompatibleFlags',
        'customAppCodeConfig' => 'CustomAppCodeConfig',
        'customTraceConfig' => 'CustomTraceConfig',
        'customerConfigs' => 'CustomerConfigs',
        'defaultDomain' => 'DefaultDomain',
        'description' => 'Description',
        'filterAppCodeForBackend' => 'FilterAppCodeForBackend',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'passthroughHeaders' => 'PassthroughHeaders',
        'rpcPattern' => 'RpcPattern',
        'rpsLimitForServerless' => 'RpsLimitForServerless',
        'securityToken' => 'SecurityToken',
        'supportSSE' => 'SupportSSE',
        'tag' => 'Tag',
        'userLogConfig' => 'UserLogConfig',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['BasePath'] = $this->basePath;
        }

        if (null !== $this->compatibleFlags) {
            $res['CompatibleFlags'] = $this->compatibleFlags;
        }

        if (null !== $this->customAppCodeConfig) {
            $res['CustomAppCodeConfig'] = $this->customAppCodeConfig;
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

        if (null !== $this->filterAppCodeForBackend) {
            $res['FilterAppCodeForBackend'] = $this->filterAppCodeForBackend;
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

        if (null !== $this->rpsLimitForServerless) {
            $res['RpsLimitForServerless'] = $this->rpsLimitForServerless;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->supportSSE) {
            $res['SupportSSE'] = $this->supportSSE;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userLogConfig) {
            $res['UserLogConfig'] = $this->userLogConfig;
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
        if (isset($map['BasePath'])) {
            $model->basePath = $map['BasePath'];
        }

        if (isset($map['CompatibleFlags'])) {
            $model->compatibleFlags = $map['CompatibleFlags'];
        }

        if (isset($map['CustomAppCodeConfig'])) {
            $model->customAppCodeConfig = $map['CustomAppCodeConfig'];
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

        if (isset($map['FilterAppCodeForBackend'])) {
            $model->filterAppCodeForBackend = $map['FilterAppCodeForBackend'];
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

        if (isset($map['RpsLimitForServerless'])) {
            $model->rpsLimitForServerless = $map['RpsLimitForServerless'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SupportSSE'])) {
            $model->supportSSE = $map['SupportSSE'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['UserLogConfig'])) {
            $model->userLogConfig = $map['UserLogConfig'];
        }

        return $model;
    }
}
