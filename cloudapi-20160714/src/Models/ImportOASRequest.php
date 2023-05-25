<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ImportOASRequest extends Model
{
    /**
     * @description API安全认证类型，目前可以取值：
     *
     * - **APP**：只允许已授权的APP调用
     * - **ANONYMOUS**：允许匿名调用，设置为允许匿名调用需要注意：
     * - 任何能够获取该API服务信息的人，都将能够调用该API。网关不会对调用者做身份认证，也无法设置按用户的流量控制，若开放该API请设置好按API的流量控制。
     * @example APP
     *
     * @var string
     */
    public $authType;

    /**
     * @example testBackendService
     *
     * @var string
     */
    public $backendName;

    /**
     * @example swagger: "2.0"
     * - "sold"
     * @var string
     */
    public $data;

    /**
     * @example 08ae4aa0f95e4321849ee57f4e0b3077
     *
     * @var string
     */
    public $groupId;

    /**
     * @example true
     *
     * @var bool
     */
    public $ignoreWarning;

    /**
     * @example OAS2
     *
     * @var string
     */
    public $OASVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @example PASSTHROUGH
     *
     * @var string
     */
    public $requestMode;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $skipDryRun;
    protected $_name = [
        'authType'      => 'AuthType',
        'backendName'   => 'BackendName',
        'data'          => 'Data',
        'groupId'       => 'GroupId',
        'ignoreWarning' => 'IgnoreWarning',
        'OASVersion'    => 'OASVersion',
        'overwrite'     => 'Overwrite',
        'requestMode'   => 'RequestMode',
        'securityToken' => 'SecurityToken',
        'skipDryRun'    => 'SkipDryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->backendName) {
            $res['BackendName'] = $this->backendName;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ignoreWarning) {
            $res['IgnoreWarning'] = $this->ignoreWarning;
        }
        if (null !== $this->OASVersion) {
            $res['OASVersion'] = $this->OASVersion;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->requestMode) {
            $res['RequestMode'] = $this->requestMode;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->skipDryRun) {
            $res['SkipDryRun'] = $this->skipDryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportOASRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['BackendName'])) {
            $model->backendName = $map['BackendName'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IgnoreWarning'])) {
            $model->ignoreWarning = $map['IgnoreWarning'];
        }
        if (isset($map['OASVersion'])) {
            $model->OASVersion = $map['OASVersion'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['RequestMode'])) {
            $model->requestMode = $map['RequestMode'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SkipDryRun'])) {
            $model->skipDryRun = $map['SkipDryRun'];
        }

        return $model;
    }
}
